<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="col-md-8 col-md-offset-2">
  <h3><b>Update a customer<b></h3>
 </div>
  <div class="col-md-6 col-md-offset-3">
      <div class="col-md-3">
      	<h4>Name</h4> <br>
      	<h4>Email-adress</h4> <br>
      	<h4>Mobile number</h4>
      </div>
      <div class="col-md-6">
		  <form method="post" action="">
			 <input type="text" name="forname">     
			 <input type="text" name="foradress">  
			 <input type="text" name="foranumber">   
			 <input class="button" type="submit" value="update" name="submit"> <input class="button" type="submit" value="back" name="submit" >
		  </form>
      </div>
      <div class="col-md-3">
      	<h4>Please enter name<br></h4>
      	<h4>Please enter email-adress</h4><br>
      	<h4>Please enter mobile number</h4><br>
      </div>
</div>

<?php 

include "db_config.php";

if (isset($_POST['submit'])) {
	$new_name = $_POST['forname'];
	$new_adress = $_POST['foradress'];
	$new_anumber = $_POST['foranumber'];

    $id=$_GET['id'];
	$sql = "UPDATE `test2` SET `name`='$new_name',`adress`='$new_adress',`anumber`='$new_anumber' WHERE id = '$id' ";
	
	$query = mysqli_query($db_connection,$sql);
	if ($query) {
		header("Location:show.php");
	}else {
		echo "error";
	}
}

?>
</body>
</html>