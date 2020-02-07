
<span style="color: red"><?php if (isset($data['result'])) echo $data['result'] ?></span><br>
<div class="container-fluid">
    <div class="row" style="background: #000000;color: #dce8f1">
        <div class="col-md-9" id="right-status">
            USER MANAGEMENT
        </div>
    </div>
</div>
<!--Search Box-->
<nav class="navbar navbar-light bg-light" style="margin-top: 15px;">
    <form class="form-inline" action="/baseMVC/Users/search" method="POST">
        <input class="form-control" style="width: 850px;" id="search-input" type="search" name="search"
               placeholder="Search" aria-label="Search" required>
        <button class="btn btn-primary" style="margin-left: 10px;" type="submit" name="submit">Search</button>
        <span style="color:red;">
                <?php if (isset($data['errorSearch'])) echo $data['errorSearch'] ?>
            </span>
        <br>
    </form>
</nav>
<!--End Search Box-->
<table class="table table-bordered table-striped" id="table">
    <thead>
    <div class="col-12" id="header-table" style="background-color: #507298;">
        <nav class="navbar navbar-light" style="color:white">
            <a><i class="fa fa-bars"></i> USER MANAGEMENT</a>
        </nav>
    </div>
    <br>
    </thead>
    <div id="add-category">
        <a href="/baseMVC/Users/Add">
            <button type="submit" style="background-color: #507298;" class="btn btn-primary">Add User</button>
        </a>
    </div>
    <br>
    <tbody>
    <tr style="color: #507298;">
        <th scope="col"><input type="checkbox" aria-label="Checkbox for following text input"></th>
        <th scope="col">ID</th>
        <th scope="col">Full Name</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Pass Word</th>
        <th scope="col">Active</th>
        <th scope="col">Action</th>
    </tr>


    <?php
    $id = "";
    foreach ($data['users'] as $key => $values) {
        ?>
        <tr>
            <th scope="row"><input type="checkbox" aria-label="Checkbox for following text input"></th>
            <?php foreach ($values as $values1) {
                ?>

                <td id=""><?= $values1 ?></td>
                <?php
            }
            ?>
            <td>
                <a href="/baseMVC/Users/edit/<?= $values['id'] ?>"><input class="btn btn-primary" style="width: 80px;"
                                                                          value="Edit" id=""></a>
            </td>
        </tr>

        <?php
    }
    ?>


    <tr>
        <td colspan="7">
            <button type="button" class="btn btn-success">Active</button>
            <button type="button" class="btn btn-danger">DeActive</button>
        </td>
    </tr>

    </tbody>


</table>
