<?php
?>

<div class="row">
    <div class="col-12" id="header-table" style="background-color: #507298;">
        <nav class="navbar navbar-light" style="color:white">
            <a><i class="fa fa-bars"></i>Update Profile</a>
        </nav>
    </div>

    <form method="POST" action="/baseMVC/Admin/UpdateAdmin/<?= $data['idAdmin'] ?>" enctype="multipart/form-data">
        <hr>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">User Name</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       pattern="^[A-Za-z\d_]{6,32}$" title="Must Include only letters, numbers and underscores and
                        length is 6-32 characters" name="username" value="<?= $data['admin'][0]['username'] ?>">
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Pass Word</label>
            <div class="col-md-10">
                <input type="password" style="width: 900px; " class="form-control" id="inputEmail3" required
                       name="password" value="<?= $data['admin'][0]['username'] ?>"
                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                       title="Must contain at least one number and one uppercase and lowercase letter, and at least 8
                       or more characters">
            </div>

        </div>
        <br>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Avatar</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="fileToUpload">
                <label class="custom-file-label" for="customFile">Choose File </label>
            </div>
        </div>
        <br>
        <span style="color:red;"><?php if (isset($data['error'])) echo $data['error'] ?></span>
        <br>
        <br>

        <tr>
            <td colspan="7">

                <button type="submit" class="btn btn-success" name="submit">Save</button>
            </td>
        </tr>
    </form>

</div>





