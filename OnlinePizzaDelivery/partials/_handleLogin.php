<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["loginusername"];
    $password = $_POST["loginpassword"]; 
    
    $sql = "Select * from users where username='$username'"; 
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $row=mysqli_fetch_assoc($result);
        $userId = $row['id'];
        if (password_verify($password, $row['password'])){ 
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['userId'] = $userId;
            header("location: /OnlinePizzaDelivery/index.php?loginsuccess=true");
            exit();
        } 
        else{
            header("location: /OnlinePizzaDelivery/index.php?loginsuccess=false");
        }
    } 
    else{
        header("location: /OnlinePizzaDelivery/index.php?loginsuccess=false");
    }
}    
?>