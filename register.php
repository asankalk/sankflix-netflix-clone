<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");

$account = new Account($con);

if (isset($_POST["submitButton"])) {
    $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
    $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
    $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
    $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
    $email2 = FormSanitizer::sanitizeFormEmail($_POST["email2"]);
    $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);
    $password2 = FormSanitizer::sanitizeFormPassword($_POST["password2"]);

    $account->validateFirstName($firstName);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Welcome to SankFlix</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css">
</head>

<body>
    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <img src="assets/images/logo.png" alt="Site Logo" title="Site Logo">
                <h3>Sign Up</h3>
                <span>to continue to Sankflix</span>
            </div>
            <form method="POST">
                <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                <input type="text" name="firstName" placeholder="First name">
                <input type="text" name="lastName" placeholder="Last name">
                <input type="text" name="username" placeholder="Username">
                <input type="email" name="email" placeholder="Email">
                <input type="email" name="email2" placeholder="Confirm Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="password2" placeholder="Confirm Password">
                <div class="btns">
                    <input type="submit" name="submitButton" value="Submit">
                    <input type="reset" name="resetFrom" value="Reset">
                </div>
            </form>
            <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>
        </div>
    </div>
</body>

</html>