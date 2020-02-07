<?php
include "Nhanvien.php";
$idEror = $nameEror = $dateBirthEror = $addressEror = $salaryEror = "";
$id = $name = $dateBirth = $address = $salary = "";
$arr = [];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['add'])) {
        if (empty($_POST['id'])) {
            $idEror = "ID  not empty";
        } else {
            $id = $_POST['id'];
            if (!preg_match("/^[a-zA-Z \d]*$/", $_POST['id'])) {
                $idEror = "Invalid ID ";
            }

        }
        if (empty($_POST['name'])) {
            $nameEror = "User name not empty";
        } else {
            $name = $_POST['name'];
            if (!preg_match("/^[a-zA-Z ]*$/", $_POST['name'])) {
                $nameEror = "Invalid user name";
            }

        }
        if (empty($_POST['date'])) {
            $dateBirthEror = "Date  not empty";
        } else {
            $dateBirth = $_POST['date'];
        }
        if (empty($_POST['address'])) {
            $addressEror = "Address not empty";
        } else {
            $address = $_POST['address'];
        }
        if (empty($_POST['salary'])) {
            $salaryEror = "Salary  not empty";
        } else {
            $salary = $_POST['salary'];
        }
        $nhanVien = new Nhanvien($id, $name, $dateBirth, $address, $salary);
        $arr = $nhanVien->getArray();
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .eror {
            color: red;
        }
    </style>
</head>
<body>
<table>
    <tr class="table table-dark">
    <tr>
        <th style="width: 150px" scope="col">Id</th>
        <th style="width: 150px" scope="col">Name</th>
        <th style="width: 150px" scope="col">dateBirth</th>
        <th style="width: 150px" scope="col">address</th>
        <th style="width: 150px" scope="col">salary</th>
    </tr>

    <tr>
        <?php
        foreach ($arr as $key => $values) {
            ?>

            <td><?= $values ?></td>
            <?php
        }
        ?>
    </tr>

</table style="border: 1px solid black
;">

<form action="" method="post" name="" style="margin-top: 100px
    <table style="width: 1000px">
        <tr>
            <td style="width: 150px">ID</td>
            <td style="width: 150px">Name</td>
            <td style="width: 150px">DateBirth</td>
            <td style="width: 150px">Adress</td>
            <td style="width: 150px">Salary</td>
        </tr>
        <tr>
            <td><input type="text" name="id"></td>
            <td><input type="text" name="name" value="<?php if (!empty($_POST['id'])) echo $_POST['id'] ?>"></td>
            <td><input type="date" name="date"></td>
            <td><input type="text" name="address" value="<?php if (!empty($_POST['address'])) echo $_POST['address'] ?>"></td>
            <td><input type="number" name="salary" value="<?php if (!empty($_POST['salary'])) echo $_POST['salary'] ?>">
            </td>
        </tr>
        <tr>
            <td><span class="eror"><?= $idEror ?></span></td>
            <td><span class="eror"><?= $nameEror ?></span></td>
            <td><span class="eror"><?= $dateBirthEror ?></span></td>
            <td><span class="eror"><?= $addressEror ?></span></td>
            <td><span class="eror"><?= $salaryEror ?></span></td>
        </tr>

    </table>
    <tr>
        <td><input type="submit" name="add" value="Add"></td>
        <td><input type="Search" name="search" value="Search"></td>
        <td><input type="submit" name="seach1" value="Search1"></td>
    </tr>
</form>

</body>
</html>