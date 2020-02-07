<?php
session_start();

require_once('register.php');

$id = -1;
$username = $email = $address = $gender = $age = $phone_number = '';
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "SELECT * FROM STUDENT WHERE ID = ".$id;
	$result = executeResult($query);
	if($result != null && count($result) > 0) {
		$username = $result[0]['USERNAME'];
		$age = $result[0]['AGE'];
		$address = $result[0]['ADDRESS'];
		$email = $result[0]['EMAIL'];
		$phone_number = $result[0]['PHONE_NUMBER'];
		$gender = $result[0]['GENDER'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bai1 Guide</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Bai 1 - Guide</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Nhap Thong Tin SV</a></li>
      <li><a href="list_1.php">Hien Thi Thong Tin SV</a></li>
    </ul>
  </div>
</nav>
<div class="container">
	<div class="panel panel-primary">
	<div class="panel-body">
		<form method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="id" value="<?php echo $id;?>" style="display: none;">
				<input type="text" class="form-control" name="username" value="<?php echo $username;?>">
			</div>
			<div class="form-group">
				<label for="age">Age</label>
				<input type="number" class="form-control" name="age" value="<?php echo $age;?>">
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" class="form-control" name="address" value="<?php echo $address;?>">
			</div>
			   <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
			  </div>
			  <div class="form-group">
			    <label for="phone_number">Phone Number</label>
			    <input type="telno" class="form-control" name="phone_number" value="<?php echo $phone_number;?>">
			  </div>
			  <div class="form-group">
			    <label for="gender">Gender</label>
			    <select class="form-control" name="gender">
			    	<option value="Male">Male</option>
			    	<option value="Female" <?php if($gender == 'Female') echo "selected";?>>Female</option>
			    </select>
			  </div>
			  <button type="submit" class="btn btn-success">Submit</button>
			  <button type="Reset" class="btn btn-danger">Exit</button>
		</form>
	</div>
</div>
</div>
</body>
</html>