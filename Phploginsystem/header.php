<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP Project 01</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,1" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <div class="wrapper">
            <a href="index.php"><img src="logo.png" alt="BlOG LOGO"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="discover.php">About Us</a></li>
                <li><a href="blog.php">Find Blogs</a></li>
                <li><a href='signup.php'>Sign up</a></li>
                <li><a href='login.php'>Log in</a></li>
                <?php
                if (isset($_SESSION['useruid'])) {
                    echo "<li><a href='profile.php'>profile page</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                } else {
                    echo "<li><a href='signup.php'>signup page</a></li>";
                    echo "<li><a href='login.php'>login</a></li>";
                }


                ?>
            </ul>



    </nav>
</body>

</html>