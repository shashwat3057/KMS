<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		/* Add a black background color to the top navigation */
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
    width:14%;
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
body{
 background-image: url("e.jpg");
}
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
img {
    border: 0.2px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
}

img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}

	</style>
	<title>Student Portal</title>
</head>
<body>
<div class="topnav">
  <a class="active" href="homepage.php">Home</a>
  
  <a href="upload.php">Upload Book</a>
  <a href="view.php">View Books</a>
  <a href="download.php">Download Book</a>
  <a href="logout.php">Logout</a>
  <input type="text" placeholder="Search..">
</div>
<img src="f.jpg" class="center">

</body>
</html>