<?php

include "../bootstrap/index.php";

use function _\camelCase as _camelCase;

function toNumberOrZero($val) {
    return is_numeric($val) ? $val + 0 : 0;
}
if (isset($_POST["verify-resident"])) {
    $resident_id = getBody("resident_id", $_POST);

    // Update the isVerify field to 1
    $db->update("residents")
        ->set([
            "isVerify" => 1
        ])
        ->where("id", $resident_id)
        ->exec();

    $_SESSION["message"] = "Resident verified";
    $_SESSION["status"] = "success";
    header("location: ../resident-view.php?resident_id=$resident_id");
    return $conn->close();
}
if (isset($_POST["register-resident"])) {
    try {
        // Get input values from POST request
        $inputs = [
            'national_id' => getBody("national_id", $_POST),
            'citizenship' => getBody("citizenship", $_POST),
            'address' => getBody("address", $_POST),
            'fname' => getBody("fname", $_POST),
            'mname' => getBody("mname", $_POST),
            'lname' => getBody("lname", $_POST),
            'alias' => getBody("alias", $_POST),
            'birthplace' => getBody("birthplace", $_POST),
            'birthdate' => getBody("birthdate", $_POST),
            'age' => toNumberOrZero(getBody("age", $_POST)),
            'civil_status' => getBody("civil_status", $_POST),
            'gender' => getBody("gender", $_POST),
            'purokId' => getBody("purok_id", $_POST),
            'voter_status' => getBody("voter_status", $_POST),
            'identified_as' => getBody("identified_as", $_POST),
            'email' => getBody("email", $_POST),
            'number' => getBody("number", $_POST),
            'occupation' => getBody("occupation", $_POST),
            'username' => getBody("username", $_POST),
            'password' => getBody("password", $_POST),
            'password_confirm' => getBody("password_confirm", $_POST),
            'is_4ps' => toNumberOrZero(getBody("is_4ps", $_POST)),
            'is_pwd' => toNumberOrZero(getBody("is_pwd", $_POST)),
        ];

        $inputs['is_senior'] = $inputs['age'] > 60;

        $profileimg = getBody("profileimg", $_POST);

        // Check required fields
        $requiredFields = [
            "National ID" => $inputs['national_id'],
            "Citizenship" => $inputs['citizenship'],
            "Address" => $inputs['address'],
            "First Name" => $inputs['fname'],
            "Middle Name" => $inputs['mname'],
            "Last Name" => $inputs['lname'],
            "Birth Place" => $inputs['birthplace'],
            "Birth Date" => $inputs['birthdate'],
            "Age" => $inputs['age'],
            "Civil Status" => $inputs['civil_status'],
            "Gender" => $inputs['gender'],
            "Purok" => $inputs['purokId'],
            "Voter Status" => $inputs['voter_status'],
            "Email" => $inputs['email'],
            "Contact Number" => $inputs['number'],
            "Occupation" => $inputs['occupation'],
            "Username" => $inputs['username'],
            "Password" => $inputs['password'],
            "Password Confirmation" => $inputs['password_confirm'],
        ];

        $emptyRequiredField = array_find_key($requiredFields, fn($item) => empty($item));

        if ($emptyRequiredField) {
            $_SESSION["message"] = "<b>$emptyRequiredField</b> is required!";
            $_SESSION["status"] = "danger";
            header("Location: " . ($_SERVER["HTTP_REFERER"] ?: "../user-register.php"));
            return $conn->close();
        }

        // Check password confirmation
        if ($inputs['password'] !== $inputs['password_confirm']) {
            $_SESSION["message"] = "Please confirm your password!";
            $_SESSION["status"] = "danger";
            header("Location: " . ($_SERVER["HTTP_REFERER"] ?: "../user-register.php"));
            return $conn->close();
        }

        // Handle profile image upload
        $profileFile = $_FILES["img"];
        $imgFilename = !empty($profileimg) ? $profileimg : null;

        if ($profileFile["name"]) {
            $uniqId = uniqid(date("YmdhisU"));
            $ext = pathinfo($profileFile["name"], PATHINFO_EXTENSION);
            $imgFilename = "$uniqId.$ext";
            $imgDir = "../assets/uploads/$imgFilename";
            move_uploaded_file($profileFile["tmp_name"], $imgDir);
        }

        // Check for existing username
        $existingUser = $db->from("users")
            ->where("username", $inputs['username'])
            ->first()
            ->exec();

        if ($existingUser) {
            $_SESSION["message"] = "Username is already taken";
            $_SESSION["status"] = "danger";
            header("Location: " . ($_SERVER["HTTP_REFERER"] ?: "../user-register.php"));
            return $conn->close();
        }

        // Create account and insert into database
        $account_id = (function () use ($db, $inputs, $imgFilename) {
            $password = sha1($inputs['username']);
            return $db->insert("users")
                ->values([
                    "username" => $inputs['username'],
                    "password" => $password,
                    "user_type" => "user",
                    "avatar" => $imgFilename,
                ])
                ->exec()["id"];
        })();

        $db->insert("residents")
            ->values(array_merge($inputs, [
                "account_id" => $account_id,
                "avatar" => $imgFilename,
            ]))
            ->exec();

        $_SESSION["message"] = "Resident registered";
        $_SESSION["status"] = "success";
        header("Location: " . ($_SERVER["HTTP_REFERER"] ?: "../user-register.php"));
        return $conn->close();
    } catch (Exception $e) {
        echo "<pre>";
        var_dump($e);
        echo "</pre>";
        throw $e;
    }
}

if (isset($_POST["update-resident"])) {
    $resident_id = getBody("resident_id", $_POST);
    $inputs = [
        'national_id' => getBody("national_id", $_POST),
        'citizenship' => getBody("citizenship", $_POST),
        'address' => getBody("address", $_POST),
        'fname' => getBody("fname", $_POST),
        'mname' => getBody("mname", $_POST),
        'lname' => getBody("lname", $_POST),
        'alias' => getBody("alias", $_POST),
        'birthplace' => getBody("birthplace", $_POST),
        'birthdate' => getBody("birthdate", $_POST),
        'age' => getBody("age", $_POST),
        'civil_status' => getBody("civil_status", $_POST),
        'gender' => getBody("gender", $_POST),
        'purok_id' => getBody("purok_id", $_POST),
        'voter_status' => getBody("voter_status", $_POST),
        'identified_as' => getBody("identified_as", $_POST),
        'email' => getBody("email", $_POST),
        'number' => getBody("number", $_POST),
        'occupation' => getBody("occupation", $_POST),
        'username' => getBody("username", $_POST),
        'password' => getBody("password", $_POST),
        'password_confirm' => getBody("password_confirm", $_POST),
        'is_4ps' => getBody("is_4ps", $_POST),
        'is_pwd' => getBody("is_pwd", $_POST),
    ];

    $requiredFields = [
        "National ID" => $inputs['national_id'],
        "Citizenship" => $inputs['citizenship'],
        "Address" => $inputs['address'],
        "First Name" => $inputs['fname'],
        "Middle Name" => $inputs['mname'],
        "Last Name" => $inputs['lname'],
        "Alias" => $inputs['alias'],
        "Birth Place" => $inputs['birthplace'],
        "Birth Date" => $inputs['birthdate'],
        "Age" => $inputs['age'],
        "Civil Status" => $inputs['civil_status'],
        "Gender" => $inputs['gender'],
        "Purok" => $inputs['purok_id'],
        "Voter Status" => $inputs['voter_status'],
        "Email" => $inputs['email'],
        "Contact Number" => $inputs['number'],
        "Occupation" => $inputs['occupation'],
        "Username" => $inputs['username'],
    ];

    $emptyRequiredField = array_find_key($requiredFields, fn($item) => empty($item));

    if ($emptyRequiredField) {
        $_SESSION["message"] = "<b>$emptyRequiredField</b> is required!";
        $_SESSION["status"] = "danger";
        header("location: ../resident-view.php?resident_id=$resident_id");
        return $conn->close();
    }

    // Check password confirmation if provided
    if (!empty($inputs['password']) || !empty($inputs['password_confirm'])) {
        if ($inputs['password'] !== $inputs['password_confirm']) {
            $_SESSION["message"] = "Please confirm your password!";
            $_SESSION["status"] = "danger";
            header("location: ../resident-view.php?resident_id=$resident_id");
            return $conn->close();
        }
    }

    // Handle profile image upload
    $profileimg = getBody("profileimg", $_POST);
    $profileFile = $_FILES["img"];
    $imgFilename = $profileimg;

    if ($profileFile["name"]) {
        $uniqId = uniqid(date("YmdhisU"));
        $ext = pathinfo($profileFile["name"], PATHINFO_EXTENSION);
        $imgFilename = "$uniqId.$ext";
        $imgDir = "../assets/uploads/$imgFilename";
        move_uploaded_file($profileFile["tmp_name"], $imgDir);
    }

    // Update resident info
    $db->update("residents")
        ->set(array_merge($inputs, [
            "avatar" => $imgFilename,
        ]))
        ->where("id", $resident_id)
        ->exec();

    // Update account info if username/password has changed
    if ($inputs['username'] !== $existingUser["username"] || !empty($inputs['password'])) {
        $account_id = $existingUser["account_id"];
        $password = !empty($inputs['password']) ? sha1($inputs['username']) : $existingUser["password"];
        $db->update("users")
            ->set([
                "username" => $inputs['username'],
                "password" => $password,
                "avatar" => $imgFilename,
            ])
            ->where("id", $account_id)
            ->exec();
    }

    $_SESSION["message"] = "Resident updated";
    $_SESSION["status"] = "success";
    header("location: ../resident-view.php?resident_id=$resident_id");
    return $conn->close();
}
