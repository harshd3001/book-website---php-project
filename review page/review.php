<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="review.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Crossminds</title>
</head>
<body><div>
    <header>
      <?php include_once 'getting data.php';?>  
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
  <div class="info">
      <div class="photo">
      <img src="<?php echo $b;?>" alt="">
    <span><?php echo $a;?></span></div>
      <div><p class="author">written by <b><?php echo $d;?></b><br></p>
       <p class="overview"><?php echo $c;?></p>
  </div>
  </div> 
  <div class="review">
      <h1>Review</h1>
      <p><?php echo $e;?></p>
  </div>
  <!-- links -->
  <section>
    <h2><b>Articles</b></h2>
    <div class="link">
        <img src="https://images.pexels.com/photos/768125/pexels-photo-768125.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
        <a href="https://bookriot.com/read-more-books/" target=”_blank”> 20 WAYS TO READ MORE BOOKS IN 2021</a>
    </div>
    <div class="link">
    <img src="https://images.pexels.com/photos/1516983/pexels-photo-1516983.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
        <a href="https://jamesclear.com/read-more"target=”_blank”> The Simple System I’m Using to Read 30+ Books Per Year</a>
    </div>
    <div class="link">
    <img src="https://images.pexels.com/photos/415071/pexels-photo-415071.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
        <a href="https://www.inc.com/john-rampton/25-ways-to-read-a-lot-more-books-this-year.html" target=”_blank”>25 Expert Tips to Reading WAY More Books This Year</a>
    </div>
    <div class="link">
    <img src="https://images.pexels.com/photos/1130980/pexels-photo-1130980.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
        <a href="https://www.britannica.com/list/12-novels-considered-the-greatest-book-ever-written" target=”_blank”>12 Novels Considered the “Greatest Book Ever Written”</a>
    </div>
  </section>
  <!-- footer  -->
  <footer> 
    <span>Contact-us</span>
    <a href="../feedback/feedback.html" class="feedback" target=”_blank”>Feedback</a>
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