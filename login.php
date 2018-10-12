<?php include ('config.php') ?>
<!DOCTYPE html>
<html>
<head >
	<link rel="stylesheet" type="text/css" href="logincss.css">
	<title>User Login Page</title>
</head>
<body bgcolor="lightgreen">

<h1 align='center' style="font size:300%;">Knowledge Management System byNSEC <hr/></h1>

<h2 align='center' style="color:brown;" >Welcome To LOGIN Page</h2> 

<div align="center">

<img src="logo.jpg" align="center"/>
<h1></h1>
<form method="POST">
<table border="3px" cellspacing="15px">


<tr >
   <td>Email:</td>
     <td><input type="email" name="email" placeholder="enter your email"></td>
</tr> 


<tr>
      <td>Password:</td>
      <td><input type="password" name="password"  placeholder="enter your password"></td>
</tr>
<tr>
    <td><input type="submit" name="login" value="Login"></td>
</tr>
<tr>
  <td>New User?</td>
  <td><a href="signuppage.php">Sign Up!</a></td>
</tr>
</table>
</form>
<table>
  <tr>Admin?
  <a href="login2.php">Login here</a></tr>
</table>
<?php 
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	if(empty($_POST)){
		die("All fields are required");
	}
	#verify user
	$verify=mysqli_query($con,"SELECT * FROM signup WHERE email='$email' AND password='$password'") or die(mysqli_error($con));
	#check if user is valid or not

    if(mysqli_num_rows($verify)==1){
    	#start the session
    	session_start();

    	#store the user data in server temporary cache i.e SESSION
    	$_SESSION['user']=NULL;
    	$userData= mysqli_fetch_array($verify);
    	$_SESSION['user']=$userData;
    	#redirect user to homepage
    	header('location:homepage.php');
    	exit;
       } 
else{
	echo "<p style='color:red'>Invalid email or password</p>";
   }



}
?>
   

</body>
</html>