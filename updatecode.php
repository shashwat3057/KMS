<?php
if($_SERVER['REQUEST_METHOD']==="POST"){
    #connection
    include('config.php');
   /* if(empty($_POST['bname']) || empty($_POST['bdesc']) || empty($_POST['bcategory']) || empty($_POST['picture'])){
    	die("empty field found");
    }*/
	$bname=$_POST['bname'];
	$bdesc=$_POST['bdesc'];
	$bcategory=$_POST['bcategory'];
	$path=$_POST['picture'];
	$id= $_POST['id'];
	#update code
	#prepare statement
	$prepare ="UPDATE book SET name ='$name',description='$bdesc',category='$bcategory',path=$path WHERE id='$id'";
	#execute
	$exec = mysqli_query($con,$prepare) or die (mysqli_error($con));

	if($exec==1){
		?><script>
		alert('data updated successfully');
		window.location.href="view2.php";
		</script>
		<?php
	}


}
?>