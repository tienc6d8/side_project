<div class="row">
    <div class="col-12" id="header-table" style="background-color: #507298;">
        <nav class="navbar navbar-light" style="color:white">
            <a><i class="fa fa-bars"></i>Update Category</a>
        </nav>
    </div>

    <form method="POST" action="/baseMVC/Categorys/update/<?= $data['idCategoryEdit'][0]['id'] ?>">
        <hr>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       value="<?= $data['idCategoryEdit'][0]['categoryname'] ?>" name="categoryname">
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Active</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required name="active"
                       value="<?= $data['idCategoryEdit'][0]['active'] ?>" pattern="^Active$||^Deactive$"
                       title="Must is Active or Deactive">
            </div>

        </div>


        <tr>
            <td colspan="7">

                <button type="submit" class="btn btn-success" name="submit">Save</button>
                <a href="/baseMVC/Categorys/delete/<?= $data['idCategoryEdit'][0]['id'] ?>">
                    <button type="button" name="submit1" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
    </form>

</div>




