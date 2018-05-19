<?php
    session_start();
    
    include 'connect.php';
    $connect = getDBConnection();
    
    $first = $_POST['firstName'];
    $last = $_POST['lastName'];
    $jobTitle = $_POST['jobTitle'];
    
    //Adding new score to database
    $sql = "SELECT * FROM Workers WHERE first_name = 'joe'";
    // $findValues = "";
    
    // if (!empty($first)) {
        // $findValues = " first_name = '$first'";
    // }
    
    // if (isset($_POST['lastName']) && !empty($last)) {
    //     if(empty($findValues)) {
    //         $findValues = " last_name = '$last'";
    //     } else {
    //         $findValues .= " AND last_name = '$last'";
    //     }
    // }
    
    // if (isset($_POST['jobTitle']) && !empty($jobTitle))) {
    //     if(empty($findValues)) {
    //         $findValues = " job_title = '$jobTitle'";
    //     } else {
    //         $findValues .= " AND job_title = '$jobTitle'";
    //     }
    // }
    
    // $sql .= $findValues;
    
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    
    //Encoding data using JSON
    echo json_encode($result);
?>