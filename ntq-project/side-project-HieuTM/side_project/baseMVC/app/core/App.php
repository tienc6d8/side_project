<?php

class App
{

    protected $controller = "Login";
    protected $action = "index";
    protected $param = [];

    function __construct()
    {
        /*var_dump($this->getUrlProcess());*/
        $arr = $this->getUrlProcess();
        /*var_dump($controller);*/
        //Xu ly Controller
        if (file_exists("./app/controllers/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./app/controllers/" . $this->controller . ".php";

        $this->controller = new $this->controller;

        // Xử lý action
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        //Xử lý Params
        $this->param = $arr ? array_values($arr) : [];
        call_user_func([$this->controller, $this->action], $this->param);
    }

    function getUrlProcess()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(trim($_GET['url'], "/")));    // xử lý url và tách thành mảng
        }
    }
}