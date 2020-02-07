<?php

class Admin extends Controller
{

    public $adminn;

    public function __construct()
    {
        $this->adminn = $this->model('Adminn');
    }

    public function index()
    {
        /*print_r($this->getAdmin());*/
        $this->getAdmin();

    }

    public function getAdmin()
    {
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if (isset($_POST['remember'])) {
                setcookie('username', $username, time() + 3600);
                setcookie('password', $password, time() + 3600);
            }
            if ($this->adminn->getAdmin($username, $password)) {
                $_SESSION['login'] = $username;
                $sql = "SELECT * FROM admin where username = '$username' AND password = '$password'";
                if (isset($_SESSION['login'])) {
                    $this->view('master',[
                        'admin' => $this->adminn->getAll($sql)
                    ]);
                }
            } else {
                $_SESSION['error'] = "Invalid password or number";
                $this->view('login', [
                    'eror' => $_SESSION['error']
                ]);
            }
        }
        if (isset($_SESSION['login'])) {
            $this->view('master');
        }

    }
    public function update($idAdmin){
        if(isset($_SESSION['login'])) {
            $id = $idAdmin['0'];
            $this->view('master', [
                'pageAdmin' => 'updateadmin',
                'idAdmin' => $id,
                'admin'=> $this->adminn->getAll("SELECT * FROM admin")
            ]);
        }
    }
    public function updateAdmin($idAdmin){
        $target_dir = "./app/public/images/admin/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $check = "";
        $err = "";
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $fileUpload = basename($_FILES["fileToUpload"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if (empty($_FILES['fileToUpload']['name'])) {
                $err = "Please choose your File Upload";
                $uploadOk = 0;
            } else {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

                if ($check !== false) {
                    $uploadOk = 1;
                } else {

                    $err = "File is not an image.";     /*$_SESSION['error'] = "File is not an image.";*/
                    $uploadOk = 0;
                }
                if (file_exists($target_file)) {
                    $err = "Sorry, file already exists.";   /* $_SESSION['error'] = "Sorry, file already exists.";*/
                    $uploadOk = 0;
                }
// Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000) {

                    $err = "Sorry, your file is too large.";        /* $_SESSION['error'] = "Sorry, your file is too large.";*/
                    $uploadOk = 0;
                }
// Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif") {
                    $err = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    /* $_SESSION['error'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";*/
                    $uploadOk = 0;
                }
            }
// Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $this->view('master',[
                    'pageAdmin' => 'updateadmin',
                    'idAdmin' => $idAdmin[0],
                    'error' => $err,
                    'admin'=> $this->adminn->getAll("SELECT * FROM admin")
                ]);
            } else {
                $fileNamee = strtolower(basename($_FILES["fileToUpload"]["name"]));
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                $sql = "UPDATE admin SET username = '$username',password ='$password',avatar ='$fileNamee'";
                $this->view('master',[
                    'idAdmin' => $idAdmin[0],
                    'error'=> "Update Successfully"
                ]);
            }
        }
    }
}