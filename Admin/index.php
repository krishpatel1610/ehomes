<?php
	session_start();

if(isset($_POST['Loginbtn']))
{
	$con = mysqli_connect('localhost','root','','testproject');
	@$username = $_POST["Adminemailid"];
	@$password = $_POST["Adminpassword"];
	$sql = "SELECT * FROM `Admin` WHERE `Admin`.`EMailId` = '$username' and `Admin`.`AdminPassword` = '$password'";
	$query=mysqli_query($con,$sql);
	$raw=mysqli_fetch_array($query);
	$_SESSION["aid"] = $raw[0];

	$num_rows = mysqli_num_rows($query);
	if($num_rows == 1) 
	{
	  header('Location: ManageBooking.php');
	  /*<a href='EditWorker.php?wid=".$raw[0]."'>Edit </a>*/

	}
	 else
	 {
		echo "you are not a valid user!";
	 }
 }
/*if($query == true) {
  echo '<a href="ClientLogin.php">Error: cannot execute query</a>';
  exit;
}*/


/*$num_rows = mysql_num_rows($query);
if($num_rows == 1) {
  $_SESSION["login"] = "OK";
  $_SESSION["username"] = $username;
 $redirect = "Homepage.php";
}
else
 $redirect = "ClientLogin.php";

mysql_free_result($query);
mysql_close($link);

header("Location: $redirect");*/

?>

<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title> E-Home's Services </title>
	<link rel = "stylesheet" href = "logine.css">
</head>
<body>
	<style type="text/css">
	.button{
   height: 45px;
   margin: 35px;
 }
.button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(-135deg, #8cc751, #138808);
 }
.button input:hover{
  /* transform: scale(0.99); */
    background: linear-gradient(-135deg, #138808, #8cc751);
  }
	</style>
<table>
    <div class="container">
	<div class="content">
	<div class="logo"> <img src="IMAGES\logo4-removebg-preview(1).png" alt="logo"> </div><br>
	<div  class="title"> E-Home's Services </div>
      <form action="index.php" method="post"><br>
	<div class="user-details">
        <div class="input-box">
	  <label>Email Address</label>
          <input type="text" name="Adminemailid" id="ClientId" required>
        </div><br>
        <div class="input-box">
        <label>Password</label>  
				<input type="password" name="Adminpassword" id="Clientpwd" required>
        </div>
	
	
	<div class="input-box">
	  <div class="button input" ><br>
          <input type="submit" name="Loginbtn" value="Login">
        </div>  
	</div>
	

	
	
      </form>
	</div>
    </div>
	</table>
  </body>
</html>
