<?php
class Index extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        require('layouts/header.php');
        $this->view->render('index/index');
        require('layouts/footer.php');
    }

    function login(){   
        $this->view->render('index/login');
    }

    function do_login(){

    }

    function logout(){
        session_start();
        //Session::destroy();
        session_destroy();
        header('Location: '.URL.'/index/login');
        exit;
    }
}
?>
