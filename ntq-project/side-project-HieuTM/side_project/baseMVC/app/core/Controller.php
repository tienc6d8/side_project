<?php
class Controller{
    public function view($view,$data = []){
        require_once "./app/views/".$view.".php";
    }
    public function view_($view,$data = []){
        require_once "./app/views/pages/".$view.".php";
    }
    public function model($model){
        require_once "./app/models/".$model.".php";
        return new $model;
    }
}