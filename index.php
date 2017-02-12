<DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>English</title>
<link href="css\style.css" rel="stylesheet">
<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
 </head>
  <body>
  	<div id="page">
  		<header>
	  		<div class="date-box">
		  		<b><?php
		  			date_default_timezone_set('Europe/Kiev');
		  			echo date('l jS \of F Y h:i A');
		  		?></b>
	  		</div>
	  		<div class="logo-overlay">
	  			<div class="logo">

	  			</div>
	  		</div>
	  		<div class="site-navigation">
	  			<ul class="site-navigation-main-menu">
	  				<li class="menu-list"><a href="#">Reading</a>
	  					<ul class="menu-tabs">
	  						<li><a href="#">Fairy Tales</a></li>
	  						<li><a href="#">Readers</a></li>
	  					</ul>
	  				</li>
	  				<li class="menu-list"><a href="#">Listening</a>
	  					<ul class="menu-tabs">
	  						<li><a href="#">Movie Quizzes</a></li>
	  						<li><a href="#">Songs</a></li>
	  					</ul>
	  				</li>
	  				<li class="menu-list"><a href="#">Speaking</a>
	  					<ul class="menu-tabs">
	  						<li><a href="#">Common Phrases</a></li>
	  					</ul>
	  				</li>
	  				<li class="menu-list"><a href="#">Exams</a>
	  					<ul class="menu-tabs">
	  						<li><a href="#">ЗНО</a></li>
	  						<li><a href="#">ДПА</a></li>
	  						<li><a href="#">IELTS</a></li>
	  					</ul>
	  				</li>
	  				<li class="menu-list"><a href="#">Grammar</a>
	  					<ul class="menu-tabs">
	  						<li><a href="#">Theory</a></li>
	  						<li><a href="#">Tests</a></li>
	  					</ul>
	  				</li>
	  					
	  			</ul>
	  		</div>
  		</header>
  		<div class="content-page">
  			<div class="left-culumn">

  				<div class="left-culumn-heading">
  					<h3><span>Latest news<span></h3>
  				</div>
  				<ul>
  					<li><a href="#">news</a></li>
  					<li><a href="#">news</a></li>
  					<li><a href="#">news</a></li>
  					<li><a href="#">news</a></li>
  					<li><a href="#">news</a></li>
  					<li><a href="#">news</a></li>
  				</ul>

  			</div>
  		</div>
  	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 </body>
</html>