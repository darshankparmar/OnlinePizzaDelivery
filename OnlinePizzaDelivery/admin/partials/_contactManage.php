<?php
    include '_dbconnect.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['contactReply'])) {
        $contactId = $_POST['contactId'];
        $message = $_POST['message'];
        $userId = $_POST['userId'];
        
        $sql = "INSERT INTO `contactreply` (`contactId`, `userId`, `message`, `datetime`) VALUES ('$contactId', '$userId', '$message', current_timestamp())";   
        $result = mysqli_query($conn, $sql);
        if($result) {
            echo "<script>alert('success');
                    window.location=document.referrer;
                </script>";
        }
        else {
            echo "<script>alert('failed');
                    window.location=document.referrer;
                </script>";
        }
    }
}
?>