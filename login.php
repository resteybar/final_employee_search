<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Worker Search</h1>
        <h2>Login</h2>
        <p>Admin Account: <strong>admin_1</strong>. The password is <strong>secret</strong>.</p>
        
        <!--Form to enter credentials-->
        <form method="post" action="adminPage.php">
            <input type="text" name="username" placeholder="Username"/><br/>
            <input type="password" name="password" placeholder="Password"/><br/>
            <input type="submit" name="verifyAdminBtn" value="Login"/><br/>
        </form>
        
        <form method="post" action="index.php">
            <input type="submit" name="searchBtn" value="Use Employee Search"/>
        </form>
        
    </body>
</html>