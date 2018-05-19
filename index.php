<?php
    session_start();
    
    include 'functions.php';
    
    function displayAdminPage(){
        //displays Quiz if session is active
        
        $_SESSION['isUser'] = false;
        
        if(!isset($_SESSION['username']) && $_SESSION['isUser'] == false) {
            header("Location: login.php");
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Employee Search</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        <br/><br/><br/><br/>
        
        <h1>Employee Search</h1>
        
        <div>
            <form method="post">
                First Name: <input type="text" name="firstName"/>
                <br/>
                <br/>
                 Last Name: <input type="text" name="lastName"/>
                <br/>
                <br/>
                 Job Title: <select name="jobTitle">
                    <option value="0">Select</option>
                    <option value="Software Engineer">Software Engineer</option>
                    <option value="Hardware Engineer">Hardware Engineer</option>
                    <option value="Data Scientist"   >Data Scientist</option>
                </select>
                <br/>
                <br/>
                <input type="submit" name="search" id="search" value="Search"/>
            </form>
            
            <br/>
            Note: You do not need to fill out every box for searching.
        </div>
        
        <div class="user-menu">
            <?php 
                if(isset($_SESSION['username'])) {
                    echo "Welcome ".$_SESSION['username']."! ";
                    echo "  <input type='button' id='homeBtn' value='Home' />
                            <input type='button' id='insertWorkerBtn' value='Insert Worker'/>
                            <input type='button' id='deleteWorkerBtn' value='Delete Worker'/>
                            <input type='button' id='meetingBtn' value='Create Meeting'/>
                            <input type='button' id='logoutBtn' value='Logout' />";
                } else {
                    echo "<input type='button' id='homeBtn' value='Home' />";
                    echo "<input type='button' id='logoutBtn' value='Quit' />";
                }
            ?> 
        </div>
        
        <br/><br/>
        
        <?php
            displayAdminPage();
            
            if(isset($_POST['search'])) {
                // Testing
                // echo $_POST['firstName'] . "<br/>";
                // echo $_POST['lastName'] . "<br/>";
                // echo $_POST['jobTitle'] . "<br/>";
            }
            
            displayAllWorkers();
        ?>
        
        
        
        <!--Javascript files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/eventHandler.js"></script>
    </body>
</html>