<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./app/public/source/css/style.css">
</head>

<body>
<!--Header-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12" style="background-color: #507298;">
            <nav class="navbar navbar-light" style="color:white">
                <strong>NTQ Solution Admin</strong>
            </nav>
        </div>
    </div>
</div>
<!--End Header-->
<!--  Status-->

<!--End Status-->
<!--  Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" id="left-bar">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div>
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-xs-3 offset-1">
                            <div id="img">
                                <img src="./app/public/images/admin/<?= $data['admin'][0]['avatar'] ?>" alt="Avatar"
                                     class="img-thumbnail">
                            </div>
                        </div>
                        <div class="col-xs-6 offset-1">
                            <a href="/baseMVC/Admin/update/<?= $data['admin'][0]['id'] ?>"><p><i
                                            class="fa fa-times-circle"></i>Update Profile</p></a>
                            <a href="/baseMVC/Login"><p><i class="fa fa-times-circle"></i>Loguot</p></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="list-group col-12">
                        <a href="/baseMVC/Categorys" class="list-group-item "><i class="fa fa-bars"
                                                                                 aria-hidden="true"></i> Categories</a>
                        <a href="" class="list-group-item"><i class="fa fa-product-hunt" aria-hidden="true"></i>
                            Products</a>
                        <a href="/baseMVC/Users" class="list-group-item"><i class="fa fa-user" aria-hidden="true"></i>
                            Users</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-9" id="content">
            <?php
            // Users
            if (isset($data['pageAdd'])) {
                require_once "./app/views/pages/adduser.php";
            }
            if (isset($data['pageSearch'])) {
                require_once "./app/views/pages/search.php";
            }
            if (isset($data['pageUpdate'])) {
                require_once "./app/views/pages/updateuser.php";
            }
            if (isset($data['pages'])) {
                require_once "./app/views/pages/user.php";
            }

            // Category
            if (isset($data['pageCategory'])) {
                require_once "./app/views/pages/category.php";
            }
            if (isset($data['pageUpdateCategory'])) {
                require_once "./app/views/pages/updateCategory.php";
            }
            if (isset($data['pageSearchCategory'])) {
                require_once "./app/views/pages/searchcategory.php";
            }
            //Admin
            if (isset($data['pageAdmin'])) {
                require_once "./app/views/pages/updateadmin.php";
            }


            ?>
        </div>

    </div>
</div>
<!--End content-->
</body>
</html>