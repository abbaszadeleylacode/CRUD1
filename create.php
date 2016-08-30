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
  <h3><b>Create a customer<b></h3>
 </div>
  <div class="col-md-6 col-md-offset-3">
      <div class="col-md-3">
      	<h4>Name</h4> <br>
      	<h4>Email-adress</h4> <br>
      	<h4>Mobile number</h4>
      </div>
      <div class="col-md-6">
		  <form method="post" action="create.php">
			 <input type="text" name="forname">     
			 <input type="text" name="foradress">  
			 <input type="text" name="foranumber">   
			 <input class="button" type="submit" value="create" name="submit"> <input class="button" type="submit" value="back" name="submit" >
		  </form>
      </div>
      <div class="col-md-3">
      	<h4>Please enter name<br></h4>
      	<h4>Please enter email-adress</h4><br>
      	<h4>Please enter mobile number</h4><br>
      </div>
</div>

<?php  
	$host = "localhost";
	$user_name = "root";
	$password = "";
	$db_name = "test";
	$db_connection = mysqli_connect($host,$user_name,$password,$db_name);

	if(isset($_POST['submit'])){
		$new_name = $_POST['forname'];
		$new_adress = $_POST['foradress'];
		$new_anumber = $_POST['foranumber'];
		$sql = "INSERT INTO test2 (name, adress , anumber ) VALUES('$new_name', '$new_adress', '$new_anumber')";
        $query = mysqli_query($db_connection, $sql);
        header('location:show.php');
	}
if (isset($_POST['back'])) {
  
header('location:create.php');
 }

?>
</body>
</html>