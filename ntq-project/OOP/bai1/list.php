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
      <li><a href="index.php">Nhap Thong Tin SV</a></li>
      <li class="active"><a href="list.php">Hien Thi Thong Tin SV</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<div class="panel panel-primary">
  <div class="panel-body">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>UserName</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Phone Number</th>
          <th>Address</th>
          <th>Age</th>
        </tr>
      </thead>
      <tbody>
<?php
require_once('database.php');

$query = "SELECT * FROM STUDENT";
$result = executeResult($query);
$count = 1;
foreach($result as $row) {
  echo '<tr>
          <td>'.($count++).'</td>
          <td>'.$row['USERNAME'].'</td>
          <td>'.$row['EMAIL'].'</td>
          <td>'.$row['GENDER'].'</td>
          <td>'.$row['PHONE_NUMBER'].'</td>
          <td>'.$row['ADDRESS'].'</td>
          <td>'.$row['AGE'].'</td>
        </tr>';
}
?>
      </tbody>
    </table>
  </div>
</div>
</div>
</body>
</html>