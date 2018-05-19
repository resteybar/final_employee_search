<?php
    session_start();
    
    include 'functions.php';
    
    function displayAdminPage(){
        //displays Quiz if session is active
        if(!isset($_SESSION['username'])) {
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
        <div class="user-menu">
            <?php 
                if(isset($_SESSION['username'])) {
                    echo "Welcome ".$_SESSION['username']."! ";
                    echo "  <input type='button' id='homeBtn' value='Home' />
                            <input type='button' id='insertWorkerBtn' value='Insert Worker'/>
                            <input type='button' id='deleteWorkerBtn' value='Delete Worker'/>
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
            displayAllWorkers();
        ?>
        
        <!--Javascript files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/eventHandler.js"></script>
    </body>
</html>