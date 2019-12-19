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

/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */  
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
<link rel="stylesheet" href="css/style.css" type="text/css">

<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

<script >
	function validemail()
	{
		var x=document.formf.email.value;
		var atposition=x.indexOf("@");
		var dotposition=x.lastIndexOf(".");
		
		if(atposition<1||dotposition<atposition+2||dotpositio+2>=email.length())
		{
				alert("Please enter a valid email id");
				return false;
		}
		else 
			{ return true; }
	}
</script>
</head>

<?php
	require("config.php");
	 if(isset($_POST['btn1']))
	 {
		
		$uname=$_POST['Fname'];
		$Lname=$_POST['Lname'];
		$email=$_POST['Email'];
		$adds=$_POST['Country'];
		$pass=$_POST['Description'];
		
		
		 $query="INSERT INTO feedback(Fname,Lname,Country,Email,Description) values('$uname','$Lname','$adds','$email','$pass')";
		 $ex=mysqli_query($conn,$query);
		 if($ex)
		 {
		     echo"<script type='text/javascript'>alert('Thank you for your feedback!!');</script>";		
             header("Location:index.php");		 
		  }
		 else
		  {
			echo "connection error try again later.....";
		  }
     }	
?>

<?php?>
<body>
<div class="header">
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
					<a href="feedback.php">FeedBack</a>
				</li>
			</ul>
		</div>
</div>

<div class="container">
  <form method="post" name="formf" onsubmit="return validateForm();">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="Fname" placeholder="Your first name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="Lname" placeholder="Your last name.." required>
	
    <label for="email">Email</label>
    <input type="text" id="email" name="Email" placeholder="Your email id.." required>
	<br>
    <label for="country" required>Country</label>
    <select id="country" name="Country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="india">India</option>
<option value="others">Other</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="Description" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" name ="btn1" value="Submit">

  </form>
</div>
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


