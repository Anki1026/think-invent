<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>

<style>
body {
  font-family: 'Raleway', sans-serif;
  font-weight: 300;
  color:#fff;
  line-height:1.2;
  margin:0;
  
   background-image: url("images/l.jpg");
  
  background-repeat:repeat;
  background-size:cover;
  font-size: 18px;
}
#main1 {
  position:relative;
  border:2px solid rgba(255,255,255,0.2);
  width:99%;
  height:99%;
  margin:auto;
  display:block;
  /* vertical-align:middle; */
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
#main1 {
  width: 45%;
  position:absolute;
  right:30px;
  border: 0px none;
  height: 3px;
  background-image: linear-gradient(to left,transparent);
}
#main1 {
  width: 45%;
  position:absolute;
  left:30px;
  border: 0px none;
  height: 4px;
  background-image: linear-gradient(to right,transparent);
}

#main1{width:38%;height:70%;background:black;margin-left:30%;margin-top:10%;z-index: 100;position: absolute;}
#regis{color:blue;font-size:40px;text-align:center;margin-top:25px;padding:30px;}


#button{font-size:25px;color:#600;font-weight:bold;width:70%;height:45px;padding:10px;background:#0099FF;border:none;margin-left:15%;}
#log{font-size:25px;color:#600;font-weight:bold;width:60%;height:45px;padding:10px;background:#0099FF;border:none;margin-left:15%;}

#label1{font-size:34px;color:white; margin-left:15%;text-align:left;width:80%}
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
		
		if(atposition<1||dotposition<atposition+2||dotpositio+2>=email.length())
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
if(isset($_POST['btn']))
{
		$email = $_POST['Email'];
		$pass = $_POST['Password'];
		$query = "SELECT * FROM login WHERE Email = '$email' AND Password = '$pass'";
		$run = mysqli_query($conn,$query);
		if(mysqli_num_rows($run)>0)
		{
			 $data = mysqli_fetch_array($run);
			 echo $_SESSION['loggedin']=$data['Name'];
			 header("Location:index.php");
		 }
		else 
		{
				echo "<h2>Wrong user name or password.</h2>";
				header("Location:login.php");
		}	
}

?>

</head>

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

<body>
<form id="f2" method="post" name="form2">
<div class="back1">
	<div id = "main1">
	<div id="regis">LOGIN</div>
	
     
    <div>
		<div id="label1">Email</div>
		<div id="inputl"><input type="email"  placeholder="registeredemailid@gmail.com" name="Email" class="in1" required></div>
	</div>
	
	

	<div id="label1">Password</div>
	<div id="inputl"><input type="password"  name="Password" class="in1" required /></div>
    
   
	<br>
	<div ><input id="log" type="submit" value="Login" name="btn" /></div>
    <br />
			
</div>
</div>
</form>
</body>

</html>

