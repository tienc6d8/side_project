<?php

class Categorys extends Controller
{

    public $category;
    public $adminn;

    public function __construct()
    {
        $this->category = $this->model('Category');
        $this->adminn = $this->model('Adminn');
    }

    public function index()
    {
        if (isset($_SESSION['login'])) {
            $this->view('master', [
                'pageCategory' => 'category',
                'category' => $this->category->getAlll("SELECT * FROM  categorys "),
                'admin'=> $this->adminn->getAll("SELECT * FROM admin")
            ]);
        }
    }

    public function update($idcategorys)
    {
        if (isset($_POST['submit'])) {
            $date = date('Y/m/d  - H:i:s', time());
            $categoryName = $_POST['categoryname'];
            $active = $_POST['active'];
            $sql = "UPDATE categorys SET categoryname = '$categoryName',active = '$active',timeupdated = '$date' WHERE id = '$idcategorys[0]'";
            if ($this->category->update($sql)) {
                $_SESSION['result'] = "Update Sucessfully";
                $this->view('master', [
                    'pageCategory' => 'category',
                    'category' => $this->category->getAlll("SELECT * FROM  categorys "),
                    'result' => $_SESSION['result'],
                    'admin'=> $this->adminn->getAll("SELECT * FROM admin")
                ]);
            } else {
                die('Error');
            }

        }
    }

    public function edit($idcategorys)
    {
        $sql = "SELECT * FROM categorys WHERE id = '$idcategorys[0]'";
        $this->view('master', [
            'pageUpdateCategory' => 'update',
            'idCategoryEdit' => $this->category->getALL($sql),
            'admin'=> $this->adminn->getAll("SELECT * FROM admin")
        ]);

    }

    public function search()
    {
        $searchValue = "";
        if (isset($_POST['submit'])) {
            $searchValue = $_POST['search'];
            $arr = $this->category->fullTextSearchUsers($searchValue);
            if (!isset($arr)) {
                $_SESSION['errorSearch'] = "Not found Category";
                $this->view('master', [
                    'pageCategory' => 'category',
                    'category' => $this->category->getAll("SELECT * FROM  categorys "),
                    'errorSearch' => $_SESSION['errorSearch'],
                    'admin'=> $this->adminn->getAll("SELECT * FROM admin")
                ]);
            } else {
                $_SESSION['search'] = "true";
                if (isset($_SESSION['search'])) {
                    $this->view('master', [
                        'pageSearchCategory' => 'search',
                        'category' => $this->category->fullTextSearchUsers($searchValue),
                        'admin'=> $this->adminn->getAll("SELECT * FROM admin")
                    ]);
                }
            }
        }
    }

    public function delete($idcategory)
    {
        $sql = "DELETE FROM categorys WHERE id = '$idcategory[0]'";
        if ($this->category->delete($sql)) {
            $_SESSION['result'] = "Delete Sucessfully";
            $this->view('master', [
                'pageCategory' => 'category',
                'category' => $this->category->getAll("SELECT * FROM  categorys "),
                'result' => $_SESSION['result']
            ]);
        }
    }
}