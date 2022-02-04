<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="../review.js"></script>
    <title>Crossminds</title>
</head>
<body>
    <!-- header -->
    <?php include_once '../search.php';?>
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
            <a href='C:\xampp\htdocs\project\project mcc\book card\books.php'>Books</a>
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
  <section>  
    <a href="../categories/bstsell.php"><h2>1 Bestsellers</h2></a>
    <div class="cards-wrapper">
      <div class="box" onclick="value(0)">
      <div class="card"><img src="<?php  echo $q[0]['b_img']?>" alt=""></img>
      </div><span class="txt"><?php  echo $q[0]['b_name']?> </span></div>
      <div class="box" onclick='value(1)'>
        <div class="card"><img src="<?php  echo $q[1]['b_img']?>" alt=""></img>
        </div><span class="txt"><?php  echo $q[1]['b_name']?></span></div>
        <div class="box"onclick="value(2)">
          <div class="card"><img src="<?php  echo $q[2]['b_img']?>" alt=""></img>
          </div><span class="txt"><?php  echo$q[2]['b_name']?></span></div>
          <div class="box"onclick="value(3)">
            <div class="card"><img src="<?php  echo $q[3]['b_img']?>" alt=""></img>
            </div><span class="txt"><?php  echo $q[3]['b_name']?> </span></div>
            <div class="box"onclick="value(4)">
              <div class="card"><img src="<?php  echo $q[4]['b_img']?>" alt=""></img>
              </div><span class="txt"><?php  echo $q[4]['b_name']?> </span></div>
              <div class="box"onclick="value(5)">
                <div class="card"><img src="<?php  echo $q[5]['b_img']?>" alt=""></img>
                </div><span class="txt"><?php  echo $q[5]['b_name']?> </span></div>
    </div>
  </section>
  <section>
    <a href="../categories/selfhelp.php"><h2>#2 Self Help</h2></a>
    <div class="cards-wrapper">
      <div class="box"onclick="value(6)">
        <div class="card"><img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1466865542i/18144590.jpg" alt=""></img>
        </div><span class="txt">The Alchemist</span></div>
        <div class="box"onclick="value(7)">
          <div class="card"><img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1465761302i/28257707.jpg" alt=""></img>
          </div><span class="txt">The Subtle Art of Not Giving a F*ck </span></div>
          <div class="box"onclick="value(8)">
            <div class="card"><img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1344266315i/3228917.jpg" alt=""></img>
            </div><span class="txt">Outliers: The Story of Success</span></div>
            <div class="box"onclick="value(9)">
              <div class="card"><img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1388639717i/4894.jpg" alt=""></img>
              </div><span class="txt">Who Moved My Cheese?</span></div>
              <div class="box"onclick="value(10)">
                <div class="card"><img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1317793965i/11468377.jpg" alt=""></img>
                </div><span class="txt">Thinking, Fast and Slow </span></div>
                <div class="box"onclick="value(11)">
                  <div class="card"><img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1386925535i/6708.jpg" alt=""></img>
                  </div><span class="txt">The Power of Now</span></div>
    </div>
  </section>
  <section>
    <a href="../categories/bio.php"><h2>#3 Biography</h2></a>
      <div class="cards-wrapper">
        <div class="box"onclick="value(12)">
          <div class="card"><img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1442657421i/7518289.jpg" alt=""></img>
          </div><span class="txt">The Facebook Effect</span></div>
          <div class="box"onclick="value(13)">
            <div class="card"><img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1631792766i/17660462.jpg" alt=""></img>
            </div><span class="txt">The Everything Store</span></div>
            <div class="box"onclick="value(14)">
              <div class="card"><img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1518291452i/25541028.jpg" alt=""></img>
              </div><span class="txt">Elon Musk</span></div>
              <div class="box"onclick="value(15)">
                <div class="card"><img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1600432716i/51942513.jpg" alt=""></img>
                </div><span class="txt">Think Like a Monk</span></div>
                <div class="box"onclick="value(16)">
                  <div class="card"><img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1511288482i/11084145.jpg" alt=""></img>
                  </div><span class="txt">Steve Jobs</span></div>
                  <div class="box"onclick="value(17)">
                    <div class="card"><img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1312034744i/824938.jpg" alt=""></img>
                    </div><span class="txt">Churchill: A Life</span></div>
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