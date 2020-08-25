<?php
session_start();
$login = 'Fernando';

$_SESSION['admin'] = $login;

if( isset($_SESSION['admin']) ){
    header('Location:index.php');
}
