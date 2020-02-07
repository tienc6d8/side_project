<?php
    session_start();
    $erroEmployeecode = $erroName = $erroBirthday = $erroAddress = $erroSalary = "";
    $employee = $name = $birthday = $address = $salary = "";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if(empty($_POST['employeecode'])){
            $erroEmployeecode = "Employee Code not empty";
        }else {
            $employee = $_POST['employeecode'];
        }

        if(empty($_POST['usename'])){
            $erroName = "Usename not empty";
        }else {
            $name = $_POST['usename'];
        }

        if(empty($_POST['birthday'])){
            $erroBirthday = "Birthday not empty";
        }else {
            $birthday = $_POST['birthday'];
        }

        if(empty($_POST['address'])){
            $erroAddress = "Address not empty";
        }else {
            $address = $_POST['address'];
        }

        if(empty($_POST['salary'])){
            $erroSalary = "Salary not empty";
        }else {
            $salary = $_POST['salary'];
        }
    }
        if(!empty($_POST)){
            $_SESSION['employeecode'] = $employee;
            $_SESSION['usename'] = $name;
            $_SESSION['birthday'] = $birthday;
            $_SESSION['address'] = $address;
            $_SESSION['salary'] = $salary;

        }

        $employee = array();
        $employee1 = array();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    array_push($employee,$_SESSION['employeecode']);
    array_push($employee,$_SESSION['usename']);
    array_push($employee,$_SESSION['birthday']);
    array_push($employee,$_SESSION['address']);
    array_push($employee,$_SESSION['salary']);
}
    sort($employee);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style type="text/css">
        .eror {
            color: red;
        }
    </style
</head>
<body>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label>EmployeeCode:</label>
            <input type="text" class="form-control" id="employeecode"  name="employeecode">
                        <span class="eror"><?php echo $erroEmployeecode ?></span><br>
        </div>
        <div class="form-group">
            <label>Usename:</label>
            <input type="text" class="form-control" id="usename"  name="usename">
            <span class="eror"><?php echo $erroName ?></span><br>
        </div>

        <div class="form-group">
            <label>Birthday:</label>
            <input type="text" class="form-control" id="birthday" name="birthday">
            <span class="eror"><?php echo $erroBirthday ?></span><br>
        </div>

        <div class="form-group">
            <label>Address:</label>
            <input type="text" class="form-control" id="address" name="address">
            <span class="eror"><?php echo $erroAddress ?></span><br>
        </div>

        <div class="form-group">
            <label>Salary:</label>
            <input type="text" class="form-control" id="salary" name="salary">
                        <span class="eror"><?php echo $erroSalary ?></span><br>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Employee Code</th>
                    <th scope="col">UseName</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Address</th>
                    <th scope="col">Salary</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php foreach ($employee as $key => $value){ ?>
                    <td>
                        <?php echo $value; ?>
                    </td>
                    <?php } ?>
                </tr>
                </tbody>
            </table>
        </div>
    </form>
</div>
</body>
</html>


