<?php 

if($_SERVER["REQUEST_METHOD"]==="GET")
{
	#CONNECTION CODE
	include('config.php');
	$id=$_GET['id'];
	
	#PREPARE STATEMENT

	$statement = "SELECT * FROM book WHERE id='$id'";
	
    #execute
	$exec = mysqli_query($con,$statement) or die (mysqli_error($con));

	#user data

	$row =mysqli_fetch_array($exec);
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Information</title>
</head>
<body>
<div>
	<form action="updatecode.php"  method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $row['id']?>">
<table border="4px" cellspacing="13px" width="30%">
<tr>
      <td>Book's Name:</td>
<td><input type="name" 
name="bname"  placeholder="Enter the name of the book" value="value="<?php echo $row['name']?>""></td>
</tr>


<tr>
<td>Book's Description:</td>
<td><input type="text" name="bdesc" value="value="<?php echo $row['description']?>"">


<tr>
<td>Book's Category:</td>
<td><input type="text"
name="bcategory" placeholder="Enter the book's category" value="value="<?php echo $row['category']?>""></td>
</tr>
	<tr>
			<td>Select Book:</td>
			<td><input type="file" name="picture" value="Select"<?php echo $row['path']?>""></td>
		</tr>

<tr>
<td><input type="Submit"
name="submit" value="UPLOAD"></td>
</tr>

</table>
</form>
</div>
</body>
</html>