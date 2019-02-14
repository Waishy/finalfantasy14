<?php 

function debug($variable) {
    echo '<pre>' . print_r($variable, true) . '</pre>';
}

function str_random($length) {
    $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
}

function logged_only(){

    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['auth'])){
        $_SESSION['flash']['danger'] = "Vous n'avez pas les droits suffisants pour accéder à cette page";
        header('Location: index.php');
        exit();
    }
}

function admin_only(){

  if (!isset($_SESSION['auth']->role_id) || $_SESSION['auth']->role_id !='1') {
  
  
    $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'acceder à cette page ";
    header("location: adminroot.php");
    exit;
   }
}