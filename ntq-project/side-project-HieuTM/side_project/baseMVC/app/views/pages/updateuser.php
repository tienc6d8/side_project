<div class="row">
    <div class="col-12" id="header-table" style="background-color: #507298;">
        <nav class="navbar navbar-light" style="color:white">
            <a><i class="fa fa-bars"></i>Update User</a>
        </nav>
    </div>

    <form method="POST" action="/baseMVC/Users/update/<?= $data['idUserEdit'][0]['id'] ?>">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       value="<?= $data['idUserEdit'][0]['fullname'] ?>" name="fullname">
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">User Name</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       value="<?= $data['idUserEdit'][0]['username'] ?>"
                       pattern="^[A-Za-z\d_]{6,32}$" title="Must Include only letters, numbers and underscores and
                        length is 6-32 characters" name="username">
            </div>
        </div>
        <hr>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email </label>
            <div class="col-md-10">
                <input type="email" style="width: 900px; " class="form-control" id="inputEmail3"
                       value="<?= $data['idUserEdit'][0]['email'] ?>" name="email">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Pass Word</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                       title="Must contain at least one number and one uppercase and lowercase letter, and at least 8
                       or more characters" name="password"
                       class="form-control" id="inputEmail3" value="<?= $data['idUserEdit'][0]['password'] ?>" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Active </label>
            <div class="col-md-10">
                <input type="number" required style="width: 900px;" class="form-control" id="inputEmail3"
                       value="<?= $data['idUserEdit'][0]['active'] ?>" name="active">
            </div>
        </div>

        <tr>
            <td colspan="7">
                <a href="/baseMVC/Users/update/<?= $data['idUserEdit'][0]['id'] ?>">
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                </a>
                <a href="/baseMVC/Users/delete/<?= $data['idUserEdit'][0]['id'] ?>">
                    <button type="button" name="submit1" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
    </form>

</div>



