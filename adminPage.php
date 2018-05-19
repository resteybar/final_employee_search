<?php
    session_start();
    
    include 'functions.php';
    
    $connect = getDBConnection();
    
    //Checking credentials in database
    $sql = "SELECT * FROM admins
            WHERE admin_name = :username
              AND admin_password = :password";
                
    $stmt = $connect->prepare($sql);
    
    $data = array(
        ":username" => $_POST['username'],
        ":password" => sha1($_POST['password'])
        );

    $stmt->execute($data);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //redirecting user to quiz if credentials are valid
    if(isset($user['admin_name'])){
        $_SESSION['username'] = $user['admin_name'];
        $_SESSION['isUser'] = false;
        header('Location: index.php');
    } else {
        $_SESSION['isUser'] = true;
        echo "The values you entered were incorrect. <a href='login.php'>Retry</a>";
    }
?>