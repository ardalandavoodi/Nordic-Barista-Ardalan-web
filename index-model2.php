<!DOCTYPE html>
<html lang="en" class="js no-touch">
<head>
  <title>NBC 2011</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap1.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--------Slider PHP Code------>	
	<?php
		$images=array('slider-1','slider-2','sliders-3','slider-4','slider-5','slider-6','slider-7','slider-8');
		$i=rand(0,count($images)-1);
		$selectimage="images/slider/{$images[$i]}.jpg";
	?>
</head>
<!------------Head------------->
	<body>
		<div class="bg-nbc">
			<div class="container">
<!--------Start of Header------>
			<div class="row">
				<div id="header-top">
					<div id="header-top1">
						<h1 id="title1" class="text-white">NORDIC<span class="color-b">BARISTACUP</span></h1>
						<a class="link-search" href="search-article.html">
						<img class="img-rounded" src="images/search.png" alt="search" >
						</a>
					</div>
					<div id="header-top2">
						<h5 id="title-2" class"text-muted">be together act together laern together</h5>
						<ul id="nav-header" class="nav">
							<li class="nav-item">
								<a class="nav-link" href="#">ABOUT OS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">2011 EVENT</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">NORDIC ROASTER</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">RESULT</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">LINKS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">CONTACT</a>
							</li>
						</ul>
					</div>					
<!-------------Navbar--------------->			
					<div id="slider">
						<img src="<?php echo $selectimage;?> "  /
					</div>
<!-------------Image of Header------>			
					<h3 id="des-header-bottom">"To create an environment in which language <br> about coffee and its sphere can be obtained"</h3>
					<div id="social-me">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-linkedin"></a>
						<a href="#" class="fa fa-instagram"></a>
						<a href="#" class="fa fa-rss"></a>
					</div>
				</div>
			</div>	
<!------Navbar-social media--------->
<!-------------Header--------------->
			<div class="row">
				<div class="col-md-8">
					<div id="article-page">
						<div class="row" >
							<div id="short-text" class="thumbnail">
							  <img id="img1" class="img-rounded" src="images/article images/cop.jpg" width="170" height="170">
							  <div class="caption">
								<h3>Nordic Roaster Competition 2015 – Results</h3>
								<p> We are happy to announce that the winner of the 2015 Nordic Roaster Competition is: Tim Wendelboe from Oslo, Norway. Congratulations! The Nordic Roaster 2015 was held in Copenhagen during the Nordic Roaster Forum on the 5th  – 7th of November. There were 10 participating roasters from countries across Europe. Each roaster had to submit two We are happy to announce that the winner of the 2015 Nordic Roaster Competition is: Tim Wendelboe from Oslo, Norway. Congratulations! The Nordic Roaster 2015 was held in Copenhagen during the Nordic Roaster Forum on the 5th  – 7th of November. There were 10 participating roasters from countries across Europe. Each roaster had to submit two</p>
								<p><a href="more-article.html" class="btn btn-primary" role="button">Read more...</a></p>
							  </div>
							</div>
							<div id="short-text" class="thumbnail">
							  <img id="img1" class="img-rounded" src="images/article images/art1.jpg" alt="..." width="170" height="170">
							  <div class="caption">
								<h3>2011 CUPPING SPOON</h3>
								<p>For the second year in a row each attendee will get his/her own 2011 NBC cupping spoon as a souvenir to take home. Nordic Barista Cup is happy that Espresso Parts sponsored theese spoons. All spoons are engraved with the 2011 NBC logo on the front, and the EspressoParts logo on the back.</p>
								<p><a href="#" class="btn btn-primary" role="button">Read more...</a></p>
							  </div>
							</div>
							<div id="short-text" class="thumbnail">
							  <img id="img1" class="img-rounded" src="images/article images/pis.jpg" alt="..." width="170" height="170">
							  <div class="caption">
								<h3>Wonderful Copenhagen 2011</h3>
								<p>NORDIC BARISTA CUP will be held from 25. – 27. August 2011 in Copenhagen. The theme for NBC 2011 is: SENSORY. The aim is to understand the chemistry behind our sensory perceptions and by stimulating the senses we will improve our tasting skills.</p>
								<p><a href="#" class="btn btn-primary" role="button">Read more...</a></p>
							  </div>
							</div>
						</div>
						<nav aria-label="Page navigation">
							<ul class="pagination">
								<li>
									<a href="#"  aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									</a>
								</li>
								<li class="active"><a href="index.php">1</a></li>
								<li><a href="page2.php">2</a></li>
								<li><a href="page3.php">3</a></li>
								<li><a href="page4.php">4</a></li>
								<li><a href="page5.php">5</a></li>
								<li><a href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-md-4">
					<div id="side-left">
						<div class="list-group" id="text-side">
							<h4 class="list-group-item-heading">NBC SHOP</h4>
							<p class="list-group-item-text">Your shopping card is empty</p>
							<a href="#">
								<p class="list-group-item-heading">visit the shop</p>
							</a>
						</div>				
						<div class="list-group" id="text-side">
							<h4 class="list-group-item-heading">Next event</h4>
							<p class="list-group-item-text">Where: Oslo, Norway <br>
							When: 4th of October to 5th of <br>October 2019.<br></p>									
							<a href="#">
							<p class="list-group-item-heading">Sign up now</p>
							</a>
						</div>				
						<div class="list-group" id="text-side">
							<h4 class="list-group-item-heading">Scoreboard<br></h4>
							<p class="list-group-item-text">List of winners from last years<br></p>
							<div id="comp-date">
								<ul class="nav flex-column">
								  <li class="nav-item">
									<a class="nav-link active" href="#">2014-Brazil</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="#">2015-Sweden</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="#">2016-Denmark</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="#">2017-Norway</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="#">2018-Sweden</a>
								  </li>
								</ul>
							</div>	
						</div>				
					</div>
				</div>	
			</div>	
<!------------- CONTENT--------------->
			<div id="sponsors">
				<h3 id="sponsors-text" class="text-secondary">Nordic Barista Cup Sponsors</h3>
				<img src="images/sponsors/coca.png" width="120" height="80" alt=""/>
				<img src="images/sponsors/download (1).jpg" width="120" height="80" alt=""/> 
				<img src="images/sponsors/download (1).png" width="120" height="80" alt=""/>
				<img src="images/sponsors/download (2).png" width="120" height="80" alt=""/>
				<img src="images/sponsors/download.png" width="120" height="80" alt=""/>
				<img src="images/sponsors/images (1).jpg" width="120" height="80" alt=""/>
				<img src="images/sponsors/images (1).png" width="120" height="80" alt=""/>
				<img src="images/sponsors/images (2).jpg" width="120" height="80" alt=""/>
				<img src="images/sponsors/images (2).png" width="120" height="80" alt=""/>
				<img src="images/sponsors/images (3).jpg" width="120" height="80" alt=""/>
				<img src="images/sponsors/images (3).png" width="120" height="80" alt=""/>
				<img src="images/sponsors/images (5).png" width="120" height="80" alt=""/>
				<img src="images/sponsors/images.png" width="120" height="80" alt=""/>
				<img src="images/sponsors/images.jpg" width="120" height="80" alt=""/>
			</div>	
<!--------------SPONSORS--------------->
			<footer class="page-footer font-small teal pt-4">
				<div class="container-fluid text-center text-md-left">
					<div class="row" id="myfooter">
						<div class="col-md-4 mt-md-0 mt-3">
							<h4 class="text-white">About Nordic Barista Cup</h4>
							<h6 class="text-secondary">The vision within Nordic Barista Cup is: </h6>
							<p class="text-secondary">“To create an environment in which knowledge about coffee and its sphere can be obtained”

			The organization behind the Nordic Barista Cup see it as its main purpose to be a part of creating this forum in which people can meet, bond and achieve further knowledge.

			Our motto is: “Be together, act together, learn together”</p>

						</div>
						<div class="col-md-4 mt-md-0 mt-3">
							<h4 class="text-white">NBC Flickr Stream</h4>
							<div id="footer-icon">
								<img src="images/footer/download (1).png">
								<img src="images/footer/download.png">
								<img src="images/footer/download (1).jpg">
								<img src="images/footer/5a6110fe.png">
								<img src="images/footer/128px-Exquisite-opera.svg.png">
								<img src="images/footer/Crystal_128_penguin.png">
								<img src="images/footer/download.jpg">
								<img src="images/footer/logo.png">
								<img src="images/footer/download (2).jpg">
							</div>
						</div>
						<hr class="clearfix w-100 d-md-none pb-3">
						<div class="col-md-4 mb-md-0 mb-3">
							<h4 class="text-white">Contact</h4>
							<p class="text-secondary">Nordic Barista Cup</p>
							<address class="text-secondary">
							Amagertorv 1 K<br>
							1160 Copenhagen K<br>
							work +45 33 14 28 89<br>
							CVR: DK-11427693<br>
							E-mail: jens@nordicbaristacup.com
							</address>
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-linkedin"></a>
							<a href="#" class="fa fa-instagram"></a>
							<a href="#" class="fa fa-rss"></a>
						</div>
					</div>
				</div>
			</footer>
<!-----------FOOTER------------------>
			</div>
		</div>
	</body>
</html>