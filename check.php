<?php
require_once 'config.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    //Get DB instance.
    $db = new DB();
    $db->getDbInstance();
    $db->where("login", $login);
    $row = $db->get('users');//exec('SELECT * FROM users WHERE login = :login'); AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
    if ($db->count >= 1) {

        $db_pass = $row[0]['pass'];
        $user_id = $row[0]['id'];
        $pass = md5($pass);
        if ($pass == $db_pass) {
            $_SESSION['user_logged_in'] = TRUE;
            $_SESSION['user_role'] = $row[0]['user_role'];
            $_SESSION['login'] = $row[0]['login'];
            $_SESSION['user_id'] = $row[0]['id'];
            //Authentication successfull redirect user
            header('Location:/www/azi.note/test');
        } else {
        
            $_SESSION['login_failure'] = "Invalid user name or password";
            header('Location:/www/azi.note/login');
        }
        exit;
    } else {
        $_SESSION['login_failure'] = "Invalid user name or password";
        header('Location:/www/azi.note/login');
        exit;

    }
    }else {
    die('Method Not allowed');
    }
?>