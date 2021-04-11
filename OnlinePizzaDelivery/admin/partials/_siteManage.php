<?php
    include '_dbconnect.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['updateDetail'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $contact1 = $_POST["contact1"];
        $contact2 = $_POST["contact2"];
        $addr = $_POST["address"];


        $sql = "UPDATE `sitedetail` SET systemName = '$name' WHERE tempId = 1";   
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE `sitedetail` SET email = '$email' WHERE tempId = 1";   
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE `sitedetail` SET contact1 = '$contact1' WHERE tempId = 1";   
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE `sitedetail` SET contact2 = '$contact2' WHERE tempId = 1";   
        $result = mysqli_query($conn, $sql);
        $sql = "UPDATE `sitedetail` SET `address` = '$addr' WHERE tempId = 1";   
        $result = mysqli_query($conn, $sql);
        
        if($result){
            echo "<script>alert('success');
                window.location=document.referrer;
                </script>";
        }    
    }
    
}
?>