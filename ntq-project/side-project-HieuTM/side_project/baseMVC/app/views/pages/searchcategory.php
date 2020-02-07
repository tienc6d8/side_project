<?php
?>
<!--End Search Box-->
<table class="table table-bordered table-striped" id="table">

    <td colspan="7">
        <a href="/baseMVC/Categorys">
            <button type="button" class="btn btn-success"> Back Home Category</button>
        </a>

    </td>

    <tbody>
    <tr style="color: #507298;">
        <th scope="col"><input type="checkbox" aria-label="Checkbox for following text input"></th>
        <th scope="col">ID</th>
        <th scope="col">Category Name</th>
        <th scope="col">Active</th>
        <th scope="col">Time Created</th>
        <th scope="col">Time Update</th>
        <th scope="col">Action</th>
    </tr>


    <?php foreach ($data['category'] as $key => $values) {
        ?>
        <tr>
            <th scope="row"><input type="checkbox" aria-label="Checkbox for following text input"></th>
            <?php foreach ($values as $values1) {
                ?>

                <td><?= $values1 ?></td>
                <?php
            }
            ?>
            <td>
                <a href="/baseMVC/Categorys/edit/<?= $values['id'] ?>"><input class="btn btn-primary"
                                                                              style="width: 80px;" value="Edit"
                                                                              id="<?= $values['id'] ?>"></a>
            </td>
        </tr>
        <?php
    }
    ?>


    <tr>
        <td colspan="7">
            <button type="button" class="btn btn-success">Active</button>
            <a href="/baseMVC/Categorys/">
                <button type="button" class="btn btn-danger">DeActive</button>
            </a>
        </td>
    </tr>

    </tbody>


</table>

