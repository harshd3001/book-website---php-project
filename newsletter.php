<?php
    $email = $_POST['email'];
    $conn = new mysqli('localhost:3307','root','','newsletter');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into letter(email)
        values(?)");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        echo "<SCRIPT> //not showing me this
        alert('subscribed')
        window.location.replace('http://localhost/project/project%20mcc/index.html#newsleter');
    </SCRIPT>";  
    }
?>