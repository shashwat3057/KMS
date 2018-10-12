<!DOCTYPE html>
<html>
<head>
	<title>Books Course</title>
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
    width:12%;
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
<body bgcolor="lightyellow">
		<div class="topnav">
  <a class="active" href="homepage.php">Home</a>
  
  <a href="upload.php">Upload Book</a>
  <a href="view.php">View Books</a>
  <a href="download.php">Download Book</a>
  <a href="logout.php">Logout</a>
  <input type="text" placeholder="Search..">
</div>

<?php 
if (isset ($_POST ['done'])){
echo "THE BOOKS ARE LISTED BELOW";
}
include ('config.php');
$sql="SELECT * FROM book";
$execute=mysqli_query($con,$sql) or die (mysqli_error($con));
// if(mysqli_num_rows($execute)>0){
// 	echo "no such record: ",mysqli_num_rows($execute);}
 ?>
 <table border=2 align='center' width="70%">
 <thead>
 	<tr>
 		<th>Name</th>
 		<th>Description</th>
 		<th>Category</th>
 		<th>Book</th>
 		<th>Preview</th>
 	</tr>
 </thead>
 <?php 
 while($row=mysqli_fetch_array($execute)){
 	?>
 	<tr>
 		<td><?php echo $row[1] ?></td>
 		<td><?php echo $row['name'] ?></td>
 		<td><?php echo $row['description']?></td>
 		<td><?php echo $row['category'] ?></td>
 		<td><img src="<?php echo $row['path'] ?>" width="150" height="150"></td>
 	</tr>
 <?php } ?>
 </table>
 </body>
</html>