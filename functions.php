<?php

    include 'connect.php';

    // 1) Insert New Account
    function insertWorker() {
        $db = getDBConnection(); 
        
        $first = $_POST['firstName'];
        $last = $_POST['lastName'];
        $jobTitle = $_POST['jobTitle'];
        
        if(!empty($first) && !empty($last) && !empty($jobTitle)) {
        
            $sql = "INSERT INTO Workers 
                    (worker_id, first_name, last_name, job_title) 
                    VALUES 
                    (NULL, :first, :last, :jobTitle)";
            
            $stmt = $db->prepare($sql);
            $stmt->execute(array(
                
                ":first" => $first,
                ":last"  => $last,
                ":jobTitle" => $jobTitle
                
                ));
            
            echo "<br/> <span>Worker has been added!</span> <br/>";
        }
    }
    
    // 2) Delete Account
    function deleteWorker() {
        $db = getDBConnection(); 
        
        $first = $_POST['firstName'];
        $last = $_POST['lastName'];
        $jobTitle = $_POST['jobTitle'];
        
        if(!empty($first) && !empty($last) && !empty($jobTitle)) {
        
            $sql = "DELETE FROM Workers WHERE
                    first_name = :first AND 
                    last_name = :last AND 
                    job_title = :jobTitle";
            
            $stmt = $db->prepare($sql);
            $stmt->execute(array(
                
                ":first" => $first,
                ":last"  => $last,
                ":jobTitle" => $jobTitle
                
                ));
                
            echo "<br/> <span>Worker has been deleted!</span> <br/>";
        }
    }
    
    // 3) Display all workers
    function displayAllWorkers() {
        $connect = getDBConnection();
        
        // Query includes 'sorting' in ascending order
        $sql = "SELECT * FROM Workers ORDER BY last_name";
        
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        
        $result = array();
        
        // Get all 'Workers'
        echo "<br/><br/><h3>Current Employees</h3>";
        
        echo "<table style='width:50%'>";
        echo "<tr id='columnNames'>";
        echo "  <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Job Title</th>";
        echo "</tr>";
        
        for($i = 1; $row = $stmt->fetch(PDO::FETCH_ASSOC); ++$i) {
            echo "<tr>";
            echo "  <th>$i</th>
                    <th>" . $row['first_name'] . "</th>
                    <th>" . $row['last_name'] . "</th>
                    <th>" . $row['job_title'] . "</th>";
            echo "</tr>";
        }
        
        echo "</table>";
    }
?>