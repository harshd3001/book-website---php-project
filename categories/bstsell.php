<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="../review.js"></script>
    <title>Crossminds</title>
</head>
<body>
    <!-- header -->
    <div>
    <header>  
			<nav class="cf1">
	       	 <ul class='cf2'>
	       	<li>
           <a href="..\index.html">Crossminds</a>
		    </li>
	       	<li>
            <a href=''>Categories <i class="fas fa-caret-down"></i>
			</a>
			<ul class="dropdown">
      <li><a href="../categories/bstsell.php">Bestsellers</a></li>
				<li><a href="../categories/selfhelp.php">Self Help</a></li>
				<li><a href="../categories/bio.php">Biography</a></li>
			</ul>
            </li> 	
            <li>
            <a href='../book card\books.php'>Books</a>
            </li>
            <li>
            <a href='../suggestion\sugg.php'>Suggested</a>
            </li>
            <li>
				       <a href="..\upcoming\upcoming.php">Upcoming</a>
			     </li>
            </ul>
		    </nav> 
		</header>
  </div>
  <h1><b>Bestsellers</b></h1>
  <?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname ="books";

// Create connection
$conn = mysqli_connect($servername, $username, $password , $dbname);

$sql = "SELECT b_name , b_img FROM book WHERE b_cat = 1";
$result = mysqli_query($conn, $sql);
$count=0;
echo '<section>
<div class="card wrapper" style="flex-direction: row;
background-color: #252529; margin-left: 80px;">';
while($row = mysqli_fetch_assoc($result)){
     $img=$row['b_img'];
     $name=$row['b_name']; 
     echo '<div class="box" onclick="value('.$count.')">
     <div class="card" style="height: 20em;
     min-width: 13em;
     margin-bottom: 15px;
     display: flex;
     align-items: center;
     justify-content: center;"><img src="'.$img.'" alt=""></img>
     </div><span class="txt">'.$name.'</span></div>';
     if($count==4){
        echo'</div>
        </section>
        <section>
<div class="card wrapper" style="flex-direction: row;
background-color: #252529; margin-left: 80px;">';
     }$count++;
}
echo'</div>
</section>';
 ?>
  <!-- footer  -->
  <footer> 
    <span>Contact-us</span>
    <a href="../feedback\feedback.html" class="feedback" target=”_blank”>Feedback</a>
    <b id="socials">Follow us on</b><br>
    <span>9123491234</span>
    <div class="social-btn">
      <a href=""><i class="fab fa-facebook-square"></i></a>
      <a href=""><i class="fab fa-instagram"></i></a>
      <a href=""><i class="fab fa-twitter"></i></a>
    </div><br>
    <span>crossminds@gmail.com</span><br>
    <b id="copyright">Copyright &copy;2021,Crossminds</b>
</footer> 
</body>
</html>