<?php
if(!isset($_SESSION['admin_email'])){
	
	echo "<script>window.open('login.php','_self')</script>";
	
}

else {
	
?>




<!DOCTYPE HTML>
<html>
<head>
<title>Untitled Document</title>
</head>
<style type="text/css">
form {margin:15%;}
</style>
<body>
<form action="" method="post">

<b>Insert New Category</b>

<input type="text" name="cat_title" />
<input type="submit" name="insert_cat" value="Insert Category" />

</form>

<?php

include("includes/db.php");

if(isset($_POST['insert_cat'])){
	
	$cat_title = $_POST['cat_title'];
	
	$insert_cat = "insert into categories (cat_title) values ('$cat_title')";
	
	$run_cat = mysqli_query($con, $insert_cat);
	
	if($run_cat){
		
		echo "<script>alert('New Category has been Inserted')</script>";
		echo "<script>window.open('index.php?view_cats','_self')</script>";
		
		
	}
	
	
	
	}





?>

</body>
</html>

<?php } ?>