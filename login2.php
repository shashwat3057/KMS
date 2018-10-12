<?php include ('config.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>
	<style type="text/css">
h1{
 color:red;
font-style:italic;
font-size:40px;
}
h2{
color:red;
font-style:italic;

}

tr{
line-height:30px;
font-size:23px;
}
body{
background-color:lightblue;
height:200%;
}
</style>
</head>
<body>
<h1 align="center">Knowledge Management ststem by NSEC<hr/></h1>
<div>
<h1 align="center"><font color="blue">Admin's site<font><h1>
<img src="logo.jpg" >
<h1></h1>
</head>
<body>
<form method="post">
<table border="3px" align="center" cellspacing=12px >
<tr>
      <td>Email</td>
      <td><input type="email" name="email" placeholder="Enter your email"/></td>
</tr>
<tr>
      <td>Password</td>
      <td><input type="password" name="password" placeholder="Enter your password"/></td>
</tr>

<tr>
      <td><input type="submit" name="login" value="LOGIN"</td>
</tr>
</table>
</form>
<?php 
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	if(empty($_POST)){
		die("All fields are required");
	}
	#verify user
	$verify=mysqli_query($con,"SELECT * FROM admin WHERE email='$email' AND password='$password'") or die(mysqli_error($con));
	#check if user is valid or not

    if(mysqli_num_rows($verify)==1){
    	#start the session
    	session_start();

    	#store the user data in server temporary cache i.e SESSION
    	$_SESSION['user']=NULL;
    	$userData= mysqli_fetch_array($verify);
    	$_SESSION['user']=$userData;
    	#redirect user to homepage
    	header('location:adminhome.php');
    	exit;
       } 
else{
	echo "<p style='color:red'>Invalid email or password</p>";
   }



}
?>
   

</body>
</html>