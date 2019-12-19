<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registeration</title>


<style>
.back{background:url(images/lo3.jpg);width:100%;height:860px;}
#main{width:38%;height:58%;background:#FFFFFF;margin-left:30%;margin-top:13%;z-index: 100;position: absolute;}
#login{color:#309;font-size:40px;text-align:center;margin-top:25px;padding:30px;}

#label{font-size:34px;color:#603;float:left; margin-left:15%;text-align:left;}
#input{align:center;padding:10px;margin-left:50%}

#button{font-size:25px;color:#600;font-weight:bold;width:70%;height:45px;padding:10px;background:#0099FF;border:none;margin-left:15%;}
.forget{margin-left:50%;text-decoration:none;color:#990000;font-size:12px;padding:10px;}

#f1{display:none;}
#b{height:30px;background:none;border:none;cursor:pointer;font-size:20px;}

.in{font-size:20px;}
</style>


<style>
body {
  font-family: 'Raleway', sans-serif;
  font-weight: 300;
  color:#fff;
  line-height:1.2;
  margin:0;
  background-image: url("images/s.jpg"); 
  background-repeat:repeat;
  background-size:cover;
  font-size: 18px;
}
#main1{
  position:relative;
  border:2px solid rgba(255,255,255,0.2);
  width:99%;
  height:99%;
  margin:auto;
  display:block;
  vertical-align:middle;
  border-radius:15px;
}
#main1{
  width: 45%;
  position:absolute;
  right:30px;
  border: 0px none;
  height: 3px;
  background-image: linear-gradient(to left,transparent);
}
#main1{
  width: 45%;
  position:absolute;
  left:30px;
  border: 0px none;
  height: 3px;
  background-image: linear-gradient(to right,transparent);
}
#main1{
  width:60%;
  margin:auto;
  display:block;
  margin-top:30px;
}
#main1{width:38%;height:119%;margin-left:30%;margin-top:4%;z-index: 100;position: absolute;background-color:gray;}
#regis{color:#309;font-size:40px;margin-left:12%;margin-top:25px;padding:30px;}


#button{font-size:25px;color:#600;font-weight:bold;width:70%;height:45px;padding:10px;background:#0099FF;border:none;margin-left:15%;}
#reg{font-size:25px;color:white;font-weight:bold;width:60%;height:45px;padding:10px;background:black;border:none;margin-left:15%;}

#label1{font-size:34px;color:black; margin-left:15%;text-align:left;width:80%}
#inputl{font-size:34px;align:center;padding:10px;margin-left:15%;}
#a{height:30px;background:none;border:none;cursor:pointer;font-size:20px;}
.in1{font-size:20px;width:70%;}

</style>

<script >
	function validemail()
	{
		var x=document.form1.email.value;
		var atposition=x.indexOf("@");
		var dotposition=x.lastIndexOf(".");
		
		if(atposition<1||dotposition<atposition+2||dotposition+2>=email.length())
		{
				alert("please enter a valid email id");
				return false;
		}
		else 
			{ return true; }
	}
	
	


</script>

<script >
	function validemailReg()
	{
		var x=document.form2.email.value;
		var atposition=x.indexOf("@");
		var dotposition=x.lastIndexOf(".");
		
		if(atposition<1||dotposition<atposition+2||dotpositio+2>=email.length())
		{
				alert("please enter a valid email id");
				return false;
		}
		else 
			{ 
		return true;
		}
	}
	
	


</script>




<?php 
require("config.php");
 session_start();
if(isset($_POST['login']))
{
		$email = $_POST['Email'];
		$pass = $_POST['Password'];
		$query = "SELECT * FROM login WHERE Email = '$email' AND Password = '$pass'";
		$run = mysqli_query($conn,$query);
		if(mysqli_num_rows($run)>0)
		{
			 $data = mysqli_fetch_array($run);
			 echo $_SESSION['loggedin']=$data['Name'];
			 //$_SESSION['Email']=$email; 
			 setcookie("email",$email,time()+0*0*1);
			 setcookie("pass",$pass,time()+10*60);
			 header("Location:index.html");
			 
		 }
		else 
		{
				echo "<h2>Wrong user name or password.</h2>";
				//header("Location:login.php");
		}	
}


?>

</head>
<?php
	require("config.php");
	if(isset($_POST['btn']))
	{
		
		$uname=$_POST['Name'];
		$email=$_POST['Email'];
		$cont=$_POST['Phone'];
		$pass=$_POST['Password'];
		$adds=$_POST['Address'];
		if(preg_match("/^[a-zA-Z]*$/",$uname)&& preg_match("/^[a-zA-Z0-9\s\,\''\-]*$/",$adds))
		{
		 $query="INSERT INTO login(Name,Email,Phone,Password,Address) values('$uname','$email','$cont','$pass','$adds')";
		 $ex=mysqli_query($conn,$query);
		 if($ex)
		 {
		     echo"<h1>Thank you for registering with us!Now you can login by going back to login option</h1>";	
             header("Location:login.php");			 
		  }
		 else
		  {
			echo "connection error try again later.....";
		  }
		}
		else
		{
			echo "Please fill correct name and address!!'";
		}
	}
		
	if(isset($_SESSION['id']))
	{
		$email=$_POST['Email'];
		$pass=$_POST['Password'];
		
	}
?>


<?php?>

<script>
	function showname()
	{
		var email = $("#user_email").val()
		var pass = $("#password").val()
		//alert(id);
		$.ajax({
				type:"POST", 
				url:"another.php",
				data:"email="+email+"&pass="+password,
				success:function(data)
				{
					alert(data);
				}
				})
	}
</script>


<form id="f1" method="post" name="form1">
<div class="back">
	<div id = "main">
	<div id="login">LOGIN</div>
	
		<div id="label">Email</div>
		<div id="input"><input type="email"  placeholder="abc@gmail.com" name="Email" class="in" id="email" value = "<?php if(isset($_COOKIE['Email'])) { echo $_COOKIE['Email'];} ?>"></div>


	<div id="label">Password</div>
	<div id="input"><input type="password"  name="Password" class="in" id="pass" value = "<?php if(isset($_COOKIE['Password'])) { echo $_COOKIE['Password'];} ?>"  /></div>
	<br /><br />
	
	<div ><input id="button" type="submit" value="Login" onClick="showname();" name="login" /></div><br /><br /><br>
    <input id="b" type="button" value="New User" />
	
</div>
</div>

</form>

<body>
<form id="f2" method="post" name="form2">
<div class="back1">
	<div id = "main1">
	<div id="regis">REGISTERATION</div>
	
     <div>
		<div id="label1">Name</div>
		<div id="inputl"><input type="text" name="Name" class="in1" required></div>
	</div>
    
    <div>
		<div id="label1">Email</div>
		<div id="inputl"><input type="email"  placeholder="abc@gmail.com" name="Email" class="in1" required  value = "<?php if(isset($_COOKIE['Email'])) { echo $_COOKIE['Email'];} ?>"></div>
	</div>
	
	<div>
		<div id="label1">Contact Number</div>
		<div id="inputl"><input type="tel" name="Phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required  class="in1"></div>
	</div>
	
	<div>
		<div id="label1">Address</div>
		<div id="inputl"><input type="text" name="Address" class="in1" required min="12" ></div>
	</div>

	<div id="label1">Password</div>
	<div id="inputl"><input type="password"  name="Password" class="in1" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  /></div>
    
    <div id="label1">Confirm Password</div>
	<div id="inputl"><input type="password"  name="Cpass" class="in1" required /></div>
	<br />
	
	<div ><input id="reg" type="submit" value="Registeration" name="btn" /></div>
    <br /><br /><br />
    
	
	
	
</div>
</div>


</form>
<br/>
</body>

</html>
