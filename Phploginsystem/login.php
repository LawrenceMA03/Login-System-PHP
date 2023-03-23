<?php
include_once 'header.php';
?>

<section class="signup-form">
    <h2>Login</h2>
    <div class="signup-form-form">
        <form action="login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Full name" ..>
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdrepeat" placeholder="Repeat password ...">
            <button_type="submit" name="submit">Login</button>
        </form>
    </div>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] === "emptyinput") {
            echo "<p>Fill in all fields</p>";
        } else if ($_GET["error"] === "wronglogin") {
            echo "<p>Choose a proper username</p>";
        } else if ($_GET["error"] === "invalidemail") {
            echo "<p>Choose a proper email</p>";
        } else if ($_GET["error"] === "passwordsdontmatch") {
            echo "<p>Passwords do not match</p>";
        } else if ($_GET["error"] === "stmtfailed") {
            echo "<p>Statement failed</p>";
        } else if ($_GET["error"] === "usernametaken") {
            echo "<p>Username is already taken</p>";
        } else if ($_GET["error"] === "none") {
            echo "<p>You have signed up successfully</p>";
        }
    }
    ?>

</section>

<?php
include_once 'footer.php';
?>