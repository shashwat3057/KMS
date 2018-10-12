<html>
<head>
<style type="text/css">
body{
background-image : url('Desert.jpg');
max-width:200%;
}




</style>
<title>batch HTML</title>

</head>
<body bgcolor="aliceblue">
<h1 align='center' style="font size:300%;">Knowledge Management System by NSEC<hr/></h1>

<h2 align='center' style="color:brown;font-weight:bold;" >Welcome To Signup</h2>

<form action="saveData.php"  method="POST" enctype="multipart/form-data">
<table cellspacing="20" border=4px align="center">
		<tr>
			<td>NAME:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="address" name="address"></td>
		</tr>
		<tr>
			<td>Date Of Birth</td>
			<td><input type="date" name="date"></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><input type="text" name="gender"></td>
		</tr>
		<tr>
			<td>About:</td>
			<td><input type="text" name="about"></td>
		</tr>
		<tr>
			<td>Profile Pic:</td>
			<td><input type="file" name="picture"></td>
		</tr>
		<tr>
			<td>Phone no.:</td>
			<td><input type="text" name="phone"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value=signup ></td>
		</tr>
	</table>
</form>




 




</body>
</html>
