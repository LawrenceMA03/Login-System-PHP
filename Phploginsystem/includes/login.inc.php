<?php

declare(strict_types=1);

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (loginUser($conn, $username, $pwd)) {
        header("location: ../dashboard.php");
        exit();
    } else {
        header("location: ../signup.php?error=loginfailed");
        exit();
    }
} else {
    header("location: ../signup.php");
    exit();
}
