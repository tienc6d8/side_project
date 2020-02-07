<?php 
  require_once('database.php');

  $query = "SELECT * FROM STUDENT";
  $result = executeResult($query);

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
      <li><a href="index.php">Nhap Thong Tin SV</a></li>
      <li class="active"><a href="list_1.php">Hien Thi Thong Tin SV</a></li>
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
          <th></th>
        </tr>
      </thead>
      <tbody id="data"></tbody>
    </table>
  </div>
</div>
</div>
<script type="text/javascript">
  var dataList = []
  json = '<?php echo json_encode($result); ?>'
  dataList = JSON.parse(json)
  load()

  function load() {
      $('#data').empty()
      for (var i = 0; i < dataList.length ; i++) {
      $('#data').append(`<tr>
                        <td>${i+1}</td>
                        <td>${dataList[i].USERNAME}</td>
                        <td>${dataList[i].AGE}</td>
                        <td>${dataList[i].EMAIL}</td>
                        <td>${dataList[i].PHONE_NUMBER}</td>
                        <td>${dataList[i].ADDRESS}</td>
                        <td>${dataList[i].GENDER}</td>
                        <td><button class="btn btn-danger" onclick="delelte_sv(${i})">Delete</button>
                        <a href="index.php?id=${dataList[i].ID}"><button class="btn btn-warning">Edit</button></a></td>
                      </tr>`)
      }
  }

  function delelte_sv(index) {
      dataList.splice(index,1)
      load()
      $.post('register.php',{index:index})
  }
</script>
</body>
</html>