<?php
require_once "index.php";
    class Circle
    {
        private $radius;

        public function validate()
        {
            if (isset($_POST['submit'])) {

                try {
                    if (empty($_POST['radius'])){
                        throw new \Exception('radius is not empty!');
                    }else {
                        if($_POST['radius'] < 0 ){
                            throw new \Exception('radius cannot be less than 0!');
                        }else {
                            $this->radius = $_POST['radius'];
                            $this->getInfo();
                        }
                    }

                }
                catch (Exception $err){
                    echo "Lỗi : " . $err->getMessage();
                }
            }
        }

        public function getAcreage(){

            return pi() * ($this->radius * $this->radius);
        }

        public function getPerimeter(){
            return pi() * ($this->radius * 2);
        }

        public function getInfo(){
            echo "Diện tích hình tròn : " . $this->getAcreage() . "<br><br>" ;
            echo "Chu vi hình tròn : " . $this->getPerimeter()  ;
        }

    }