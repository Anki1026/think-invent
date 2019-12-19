<!DOCTYPE html>
<html>
<head>
<style>
@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

body { margin: 0; } 
div#slider { overflow: hidden; }
div#slider figure img { width: 20%; float: left; }
div#slider figure { 
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 30s slidy infinite; 
}


body{
  background: #f2f2f2;
  font: 10pt Verdana;
}

.footerTest{
  width: 100%;
 
  position: absolute;
  left: 0;
  z-index: -1;
}

#motto{
  background: #B6B6AB;
  text-align: center;
  width: 100%;
  padding: 10px;
  color: #fff;
  font: 16pt Georgia;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
}

#footerTest{
  background: #22697F;
  padding: 15px 0 15px 0;
}

.footerWrap{
  margin: auto;
  width: 600px; 
  padding: 5px 0 5px 25px;
}

.toe{
  overflow: hidden;
  display: inline-block;
  width: 550px;
  font-size: 30pt;
  line-height: 1.6em;
  vertical-align: top;
text-align:center;
}

.toe a{
  display: block;
  text-decoration: none;
  color: #fff;
}

.toe a:hover{
  text-decoration: underline;
}

.toe h3{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  font-size: 12pt;
  display: inline-block;
  letter-spacing: 1px;
}

#legal{
  width: 100%;
  text-align: center;
  color: #EAEAEA;
  background: #22697F;
  font-size: 8pt;
  line-height: 1.6em;
  padding: 10px 10px 30px 10px;
}

#social a{
  display: inline-block;
  width: 29px;
  height: 29px;
  margin: 0 3px 3px 0;
}

#fb{
  background: url("https://imgur.com/fCRgp42.png") 0 0 no-repeat;
}

#twitter{
  background: url("https://imgur.com/fCRgp42.png") -29px 0 no-repeat;
  border-radius: 4px;  
}

#blog{
  background: url("https://imgur.com/fCRgp42.png") -58px 1px no-repeat;
}

#pinterest{
  background: url("https://imgur.com/fCRgp42.png") -87px 0 no-repeat;
  border-radius: 4px;
}

#instagram{
  background: url("https://imgur.com/fCRgp42.png") -146px 0 no-repeat;
}

#ravelry{
  background: url("https://imgur.com/fCRgp42.png") -117px 0 no-repeat;
}

#rss{
  background: url("https://imgur.com/fCRgp42.png") -175px 0 no-repeat;
}

#slstudios{
  font-family:Oswald;
  font-size:72px;
  color:coral; 
  
}
/* Grid */
.grid__item {
	height: calc(100vh - 280px);
	min-height: 260px;
	max-width: calc(100vw - 50px);
	background: #DDD;
	margin: 5px;
	padding: 100px 0;
	z-index: 1;
	position: relative;
	text-align: center;
	display: -webkit-flex;
	display: flex;
	-webkit-align-items: center;
	align-items: center;
	-webkit-justify-content: center;
	justify-content: center;
	-webkit-transform: translate3d(0,0,0); /* Solves Safari bug because of SVG clipping mask */
}

.grid__item p {
	font-size: 1.5em;
	font-weight: bold;
	color: #777;
}

/* Background colors */
.color-1 { background: #E8E0DA; }
.color-2 { background: #576b67; }
.color-3 { background: #383A35; }
.color-4 { background: #333; }
.color-5 { background: #fda9a9; }
.color-7 { background: #cde7d3; }
.color-8 { background: #DCECDD; }


.media-item {
	display: inline-block;
	padding: 1em;
	vertical-align: top;
	-webkit-transition: color 0.3s;
	transition: color 0.3s;
}

.media-item__img {
	max-width: 100%;
	opacity: 0.3;
	-webkit-transition: opacity 0.3s;
	transition: opacity 0.3s;
}

.media-item:hover .media-item__img,
.media-item:focus .media-item__img {
	opacity: 1;
}

.media-item__title {
	margin: 0;
	padding: 0.5em;
	font-size: 1em;
}

body #cdawrap {
	top: 40px;
	right: 40px;
	border: none;
}

@media screen and (max-width: 50em) {
	.codrops-header {
		padding: 3em 10% 4em;
	}
	.grid__item {
		width: 100%;
	}
}

@media screen and (max-width: 40em) {
	.codrops-header h1 {
		font-size: 1.85em;
	}
}

/* Nukun */
.link--nukun {
	color: #E3E8DC;
	font-weight: 900;
	text-transform: uppercase;
	overflow: hidden;
	padding: 10px 0;
	-webkit-transition: color 0.3s;
	transition: color 0.3s;
}

.link--nukun:hover {
	color: #1e1a1b;
}

.link--nukun::before,
.link--nukun::after {
	content: '';
	position: absolute;
	width: 40%;
  top:60%;
	height: 5px;
	background: #E3E8DC;
	bottom: 0;
	left: 30%;
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
	-webkit-transition-timing-function: cubic-bezier(0.2,1,0.3,1);
	transition-timing-function: cubic-bezier(0.2,1,0.3,1);
}

.link--nukun::after {
	background: coral;
	-webkit-transform: translate3d(-300%,0,0) scale3d(0,1,1);
	transform: translate3d(-300%,0,0) scale3d(0,1,1);
}

.link--nukun:hover::before {
	-webkit-transform: translate3d(300%,0,0) scale3d(0,1,1);
	transform: translate3d(300%,0,0) scale3d(0,1,1);
}

.link--nukun:hover::after {
	-webkit-transform: translate3d(0,0,0) scale3d(1,1,1);
	transform: translate3d(0,0,0) scale3d(1,1,1);
}

.link--nukun span {
	color: #E3E8DC;
	display: inline-block;
	position: relative;
	-webkit-transform: perspective(1000px) rotate3d(0,1,0,0deg);
	transform: perspective(1000px) rotate3d(0,1,0,0deg);
	-webkit-transition: -webkit-transform 0.5s, color 0.5s;
	transition: transform 0.5s, color 0.5s;
	-webkit-transition-timing-function: cubic-bezier(0.2,1,0.3,1);
	transition-timing-function: cubic-bezier(0.2,1,0.3,1);
}

.link--nukun:hover span {
	color: #fff;
	-webkit-transform: perspective(1000px) rotate3d(0,1,0,180deg);
	transform: perspective(1000px) rotate3d(0,1,0,180deg);
}
</style>


	<meta charset="UTF-8">
	
	
	
	

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	
	
	<title>Online Shopping</title>
	<link rel="stylesheet" href="css\style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>

<body>
	<div id="f2" class="header">
		<div>
			<a href="index.php" id="logo"><img src="images\logo.jpg" alt="logo" height=100 width=200></a>
			<ul>
				<li class="selected">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="index.php">Clothing</a>
					<ul>
						<li>
							<a href="womenclothing.php">Women's</a>
						</li>
						<li>
							<a href="menclothing.php">Men's</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="index.php">Footwear</a>
					<ul>
						<li>
							<a href="womenfootwear.php">Women's</a>
						</li>
						<li>
							<a href="menfootwear.php">Men's</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="index.php">Accessories</a>
					<ul>
						<li>
							<a href="womenaccessories.php">Women's</a>
						</li>
						<li>
							<a href="menaccessories.php">Men's</a>
						</li>
					</ul>
				</li>
				<?php if(isset($_SESSION['id'])): ?>
              <li><a href="logout.php">Logout</a></li>             
              <?php else: ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="log.php">Register</a></li>   
			  <?php endif; ?>
			  <li>
				<a href="feedback.php">Feedback</a>
			 </li>
			</ul>
		 </div>
			<div class="grid__item color-3">
				<a class="link link--nukun" id="slstudios" href="#">The<span>Trendy</span> Store...</a> 
                <h3 style ="color:white;">A True Style Indulgence</h3>
			</div>	
	   </div>			
		
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <a href="clothesoffer.php"><img src="images\img6.jpg" alt="Los Angeles" style="width:100%;"></a>
        <div class="carousel-caption">
          <h3 style="font-size:50px;font-style:SanSerif">Festive offers!!!</h3>
          <p style="font-size:40px;font-style:SanSerif">Hurry up! Offer Limited till 15 Nov</p>
        </div>
      </div>

      <div class="item">
        <a href="footwearoffer.php"><img src="images\img8.jpg" alt="Chicago" style="width:100%;"></a>
        <div class="carousel-caption">
          <h3 style="font-size:50px;font-style:SanSerif">50% OFF</h3>
          <p style="font-size:40px;font-style:SanSerif"> On footwears</p>
        </div>
      </div>
    
      <div class="item">
       <a href="accessoriesoffer.php"><img src="images\img9.jpg" alt="New York" style="width:100%;"></a>
        <div class="carousel-caption">
          <h3 style="font-size:50px;font-style:SanSerif">Men's and Women's Accessories</h3>
          <p style="font-size:40px;font-style:SanSerif">20 % off</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<img src="images\img10.jpg" alt=" "/>		
<img src="images\img11.jpg" alt=" "/>			
<div class="footerTest">
  <div id="motto">
    "The odds of going to the store for a loaf of bread and coming out with only a loaf of bread are three billion to one." - Lorem Ipsum
  </div>
  <div id="footerTest">
    <div class="footerWrap">
		<div class="toe">
          <h3>Follow</h3>
          <div id="social">
            <a id="fb" href="https://www.facebook.com/ankita.parameswaran" title="Facebook"></a>
            <a id="twitter" href="#" title="Twitter"></a>
            <a id="instagram" href="https://www.instagram.com/ankii_.98/?hl=en" title="Instagram"></a>
          </div>
<div id="motto">
          <h3>All copyright reserved@2019</h3>
 </div>        
        </div>
      </div>
    </div>
</div>		
</body>
</html>