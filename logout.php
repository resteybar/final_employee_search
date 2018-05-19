<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url(css/styles.css);
        </style>
    </head>
    
    <body>
        <div id="logoutPage">
            <img src="img/logo.png"></img>
            <h3>You have logged out of CSUMB's Employee Search.</h3>
            <form method="post" action="login.php">
                <input type="submit" name="submit" value="Return to Login"/><br/>
            </form>
        </div>
    </body>
</html>