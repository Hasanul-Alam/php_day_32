<?php

require_once 'vendor/autoload.php';
use App\classes\Auth;

if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif($_GET['page'] == 'login')
    {
        include 'pages/login.php';
    }
    elseif($_GET['page'] == 'dashboard')
    {
        include 'pages/dashboard.php';
    }
    elseif($_GET['page'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
    }
}

elseif(isset($_POST['login_btn']))
{
    $auth = new Auth($_POST);
    $message = $auth->login();
    include 'pages/login.php';
}