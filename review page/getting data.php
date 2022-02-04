<?php
session_start();

if (isset($_GET['name'])) {
$_SESSION['name'] = $_GET['name'];
}
isset($_SESSION['name']) ? "{$_SESSION['name']}" : 'name is not
set<br />';

$bname = $_SESSION['name'];

//connecting...
$db = new PDO('mysql:host=localhost:3307;dbname=books','root',''); 
  
$stmt = $db->prepare("SELECT * FROM book WHERE b_name = :bname");
  
// Use bindParam function
$stmt->bindParam(':bname', $bname);  
$stmt->execute();
$q = $stmt->fetch(PDO::FETCH_ASSOC);
$a = $q['b_name']; 
$b = $q['b_img']; 
$c = $q['b_view'];
$d = $q['b_auth'];
$e = $q['b_rev'];    


$stmt = NULL;
$db = NULL;
?>
