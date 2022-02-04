<?php
    $name = $_POST['name'];

    $email = $_POST['email'];

    $sugg = $_POST['sugg'];

    $conn = new mysqli('localhost','root','','newsletter',3307);
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into feedback(name ,email, sugg)
        values(?, ?, ?)");
        $stmt->bind_param("sss",$name,$email, $sugg);
        $stmt->execute();
        echo "<h1> Form Submitted</h1>";
        $stmt->close();
        $conn->close();
    }
?>