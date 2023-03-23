<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // Check for empty inputs
    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    // Check for invalid username
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }

    // Check for invalid email
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    // Check if passwords match
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }

    // Check if username already exists
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    // Create user if all checks pass
    createUser($conn, $name, $email, $username, $pwd);
} else {
    header("location: ../signup.php");
    exit();
}
