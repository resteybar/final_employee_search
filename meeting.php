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
        <h1>Create Meeting</h1>
        <div class="user-menu">
            <?php echo "Welcome ".$_SESSION['username']."! ";?> 
            <input type="button" id="homeBtn" value="Home" />
            <input type="button" id="insertWorkerBtn" value="Insert Worker"/>
            <input type="button" id="deleteWorkerBtn" value="Delete Worker"/>
            <input type='button' id='meetingBtn' value='Create Meeting'/>
            <input type="button" id="logoutBtn" value="Logout" />
        </div>
        
        <br/>
        
        <h1>Create Meeting</h1>
        
        <div>
            <form method="post">
                First Name: <input type="text" name="firstName"/>
                <br/>
                <br/>
                Last Name: <input type="text" name="lastName"/>
                <br/>
                <br/>
                Room #: <input type="text" name="roomNum"/>
                <br/>
                <br/>
                
                From: 
                 
                <select id="startTime" name="select">
                        <?php
                            echo "<option value='0'>Select</option>";
                            
                            for($i = 1; $i <= 5; ++$i) {
                                echo "<option value='$i:00 pm'>$i:00 pm</option>";
                            }
                        ?>
                </select>
                
                to:
                
                <select id="endTime" name="select">
                        <?php
                            echo "<option value='0'>Select</option>";
                            for($i = 1; $i <= 5; ++$i) {
                                echo "<option value='$i:00 pm'>$i:00 pm</option>";
                            }
                        ?>
                </select>
                
                <br/>
                <br/>
                <input type="submit" name="insert" value="Insert"/>
            </form>
            
        </div>
        
        <?php
            if(isset($_POST['insert'])) {
                // Testing
                echo $_POST['firstName'] . "<br/>";
                echo $_POST['lastName'] . "<br/>";
                echo $_POST['startTime'] . "<br/>";
                echo $_POST['endTime'] . "<br/>";
                echo $_POST['roomNum'] . "<br/>";
                // insertMeeting();
            }
            
            displayAllMeetings();
        ?>
        
        <!--Javascript files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/eventHandler.js"></script>
    </body>
</html>