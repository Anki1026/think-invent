<!DOCTYPE html>
<html>
<head>
<style>
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
</style>
	<meta charset="UTF-8">
	<title>The Trendy Store...</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<body>
	<div class="header">
		<div>
			<a href="index.php" id="logo"><img src="images\logo.jpg" alt="logo" height=100 width=200></a>
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li class="selected">
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
				</li>
				<?php if(isset($_SESSION['id'])): ?>
              <li><a href="logout.php">Logout</a></li>             
              <?php else: ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="log.php">Register</a></li>   
			  <?php endif; ?>
				<li>
					<a href="feedback.php">FeedBack</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="body">
		<div class="about">
					<h1 align="center">𝓣𝓗𝓔 𝓣𝓡𝓔𝓝𝓓𝓨 𝓢𝓣𝓞𝓡𝓔....𝘈 𝘛𝘳𝘶𝘦 𝘚𝘵𝘺𝘭𝘦 𝘐𝘯𝘥𝘶𝘭𝘨𝘦𝘯𝘤𝘦</h1>
			<img src="images/img2.jpg" alt=""  height=700>
			
			<ul>
				<li>
					
					<h1>Introduction</h1>
					<p>
					
					The Trendy Store is a one stop shop for all your fashion and lifestyle needs. Being India's  e-commerce store for fashion and lifestyle products, our aim is to provide a hassle free and enjoyable shopping experience to shoppers across the country with the widest range of brands and products on its portal. The brand is making a conscious effort to bring the power of fashion to shoppers with an array of the latest and trendiest products available in the country.
					
					
					
											</p>
				</li>
				<li>
					<h1>
				Our Products</h1>
					
					<p>
				      
					   Long Skirts, Top's,Jeans, Kurtis, Dress, Tshirts, Shirts, Trousers, Track suits,Leggings, , Salwar kamiz, Watches, Sneakers, Bellies, Loafers, Wallets, Sunglasses, Belts, Bags, Bracelets, Bangles, Neckpiece, and many more
					</p>
				</li>
				<li>
					
					<h1>Brands</h1>
					<p>
						Levis,Gucci,Polo Ralph Lauren,Calvin Klein,Aeropostale, Versace, Reebok, Adidas, Puma, Rolex, Rado, Gshock, Burbery, Ralph Lauren, Chanel, Prada, Hermes, Gucci and many more
					</p>
				</li>
				<li>
					
					<h1>Contact Us</h1>
					<p>
						Address : 567 Noida Industrial area
						Email: thetrendystrore@gmail.com
						Phone : 7654378654
					</p>

				</li>
			</ul>
		</div>
	</div>
	<img src="images/ecomm.jpg" alt="" width=1400 height=600>
	
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
</body>
</html>