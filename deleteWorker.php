<?php
    session_start();
    include 'functions.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Employee Search</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        <h1>Delete Worker Page</h1>
        <div class="user-menu">
            <?php echo "Welcome ".$_SESSION['username']."! ";?> 
            <input type="button" id="homeBtn" value="Home" />
            <input type="button" id="insertWorkerBtn" value="Insert Worker"/>
            <input type="button" id="deleteWorkerBtn" value="Delete Worker"/>
            <input type='button' id='meetingBtn' value='Create Meeting'/>
            <input type="button" id="logoutBtn" value="Logout" />
        </div>
        
        <br/>
        
        <h1>Delete Worker</h1>
        
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
                <input type="submit" name="delete" value="Delete"/>
            </form>
        </div>
        
        <?php
            if(isset($_POST['delete'])) {
                // Testing
                // echo $_POST['firstName'] . "<br/>";
                // echo $_POST['lastName'] . "<br/>";
                // echo $_POST['jobTitle'] . "<br/>";
                deleteWorker();
            }
            
            displayAllWorkers();
        ?>
        
        <!--Javascript files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/eventHandler.js"></script>
    </body>
</html>