<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
	<style type="text/css">
		.topnav {
    background-color: #333;
    overflow: hidden;
    width:100%;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    width:10%;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
.topnav input[type=text] {
    float: right;
    padding: 6px;
    border: none;
    margin-top: 8px;
    margin-right: 16px;
    font-size: 17px;
}
	</style>
</head>
<body bgcolor="orange">
	<div class="topnav">
  <a class="active" href="adminhome.php">Home</a>
  
  <a href="adminupload.php">Upload Book</a>
  <a href="view2.php">View Books</a>
  <a href="view2.php">Delete Book</a>
  <a href="view2.php">Update Book</a>
  <a href="logout.php">Logout</a>
  <input type="text" placeholder="Search..">
</div>
	<h1 align='center' style="font size:300%;">Knowledge Management System byNSEC<hr/></h1>

<img src="c.jpg" height="300px" width="34.6%" />
<img src="logo.jpg" height="300px" width="30%"/>
<img src="b.jpg" height="300px" width="34.6%"  />
<h1></h1>
<div align="center">
	<form action="saveData2.php"  method="POST" enctype="multipart/form-data">
<table border="4px" cellspacing="13px" width="30%">
<tr>
      <td>Book's Name:</td>
<td><input type="name" 
name="bname"  placeholder="Enter the name of the book"></td>
</tr>


<tr>
<td>Book's Description:</td>
<td><input type="text" name="bdesc" placeholder="description of book"></td>
</tr>


<tr>
<td>Book's Category:</td>
<td><input type="text"
name="bcategory" placeholder="Enter the book's category"></td>
</tr>
	<tr>
			<td>Select Book:</td>
			<td><input type="file" name="picture"></td>
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