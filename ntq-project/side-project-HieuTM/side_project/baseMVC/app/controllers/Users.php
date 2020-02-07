<?php

class Users extends Controller
{
    public $user;
    public $adminn;

    public function __construct()
    {
        $this->user = $this->model('User');
        $this->adminn = $this->model('Adminn');
    }

    public function index()
    {
        if (isset($_SESSION['login'])) {
            $this->view('master', [
                'pages' => 'user',
                'users' => $this->user->getALL("SELECT * FROM  users "),
                'admin'=> $this->adminn->getAll("SELECT * FROM admin")
            ]);
        }
    }

    public function search()
    {
        if(isset($_SESSION['login'])) {
            $searchValue = "";
            if (isset($_POST['submit'])) {
                $searchValue = $_POST['search'];
                $arr = $this->user->fullTextSearchUsers($searchValue);
                if (!isset($arr)) {
                    $_SESSION['errorSearch'] = "Not found User";
                    $this->view('master', [
                        'pages' => 'user',
                        'users' => $this->user->getALL("SELECT * FROM  users "),
                        'errorSearch' => $_SESSION['errorSearch']
                    ]);
                } else {
                    $_SESSION['search'] = "true";
                    if (isset($_SESSION['search'])) {
                        $this->view('master', [
                            'pageSearch' => 'search',
                            'users' => $this->user->fullTextSearchUsers($searchValue),
                            'admin' => $this->adminn->getAll("SELECT * FROM admin")
                        ]);
                    }
                }
            }
        }
    }


    public function Add()
    {
        if(isset($_SESSION['login'])) {

            $this->view('master', [
                'pageAdd' => 'adduser',
                'admin' => $this->adminn->getAll("SELECT * FROM admin")
            ]);
        }
    }

    public function validateAdd()
    {
        if (isset($_POST['submit'])) {
            $fullName = $_POST['fullname'];
            $userName = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $active = $_POST['active'] == 0 ? 'false' : 'true';
            $sql = "INSERT INTO users VALUES ('','$fullName','$userName','$email','$password','$active')";
            if ($this->user->insert($sql)) {
                $_SESSION['insertTrue'] = "SuccessFully";
                $this->view('master', [
                    'result' => $_SESSION['insertTrue'],
                    'pages' => 'user',
                    'users' => $this->user->getALL("SELECT * FROM  users "),
                    'admin'=> $this->adminn->getAll("SELECT * FROM admin")
                ]);
            };
        }

    }

    public function edit($iduser)
    {

        $sql = "SELECT * FROM users WHERE id = '$iduser[0]'";
        $this->view('master', [
            'pageUpdate' => 'update',
            'idUserEdit' => $this->user->getALL($sql),
            'admin'=> $this->adminn->getAll("SELECT * FROM admin")
        ]);

    }

    public function update($iduser)
    {
        if (isset($_POST['submit'])) {
            $fullName = $_POST['fullname'];
            $userName = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $active = $_POST['active'] == 0 ? 'false' : 'true';
            $sql = "UPDATE users SET fullname = '$fullName',username = '$userName',email = '$email',password = '$password',active = '$active' WHERE id = $iduser[0]";
            if ($this->user->update($sql)) {
                $_SESSION['result'] = "Update Sucessfully";
                $this->view('master', [
                    'pages' => 'user',
                    'users' => $this->user->getALL("SELECT * FROM  users "),
                    'result' => $_SESSION['result'],
                    'admin'=> $this->adminn->getAll("SELECT * FROM admin")
                ]);
            } else {
                die('Error');
            }

        }
    }

    public function delete($iduser)
    {
        $sql = "DELETE FROM users WHERE id = '$iduser[0]'";
        if ($this->user->delete($sql)) {
            $_SESSION['result'] = "Delete Sucessfully";
            $this->view('master', [
                'pages' => 'user',
                'users' => $this->user->getALL("SELECT * FROM  users "),
                'result' => $_SESSION['result'],
                'admin'=> $this->adminn->getAll("SELECT * FROM admin")
            ]);
        }
    }


}