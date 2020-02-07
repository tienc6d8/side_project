<div class="row">
    <div class="col-12" id="header-table" style="background-color: #507298;">
        <nav class="navbar navbar-light" style="color:white">
            <a><i class="fa fa-bars"></i> Add User</a>
        </nav>
    </div>

    <form method="POST" action="baseMVC/Users/validateAdd">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       placeholder="please enter your full name" name="fullname">
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">User Name</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       placeholder="please enter your user name" name="username"
                       pattern="^[A-Za-z\d_]{6,32}$" title="Must Include only letters, numbers and underscores and
                        length is 6-32 characters">
            </div>
        </div>
        <hr>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email </label>
            <div class="col-md-10">
                <input type="email" style="width: 900px; " class="form-control" id="inputEmail3"
                       placeholder="please enter your email" required name="email">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Pass Word</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                       title="Must contain at least one number and one uppercase and lowercase letter, and at least 8
                       or more characters" name="password"
                       class="form-control" id="inputEmail3" placeholder="please enter your pass word" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Active </label>
            <div class="col-md-10">
                <input type="number" required style="width: 900px;" class="form-control" id="inputEmail3"
                       placeholder="please choose values" min="0" max="1" name="active">
            </div>
        </div>
        <div id="add-category">
            <a href="">
                <button type="submit" style="background-color: #507298;" class="btn btn-primary" name="submit">Add
                    User
                </button>
                <span></span><span></span><span></span>
                <span style="color: red"><?php if (isset($data['result'])) {
                        echo $data['result'];
                    } ?></span>
            </a>
        </div>
    </form>
</div>



