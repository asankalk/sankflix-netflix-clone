<?php
    if(isset($_POST["submitButton"])){
        $firstName = sanitizeFormString($_POST["firstName"]);
        echo $firstName;
    }

    function sanitizeFormString($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ","",$inputText);
        $inputText - strtolower($inputText);
        $inputText = ucfirst($inputText);
        return $inputText;
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
                    <h3>Sign In</h3>
                    <span>to continue to Sankflix</span>

                </div>
                <form method="POST">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <div class="btns">
                        <input type="submit" name="submitButton" value="Submit" required>
                        <input type="reset" name="resetFrom" value="Reset" required>
                    </div>

                </form>

                <a href="register.php" class="signInMessage">Don't have an account? Sign Up here!</a>
            </div>
        </div>

    </body>
</html>