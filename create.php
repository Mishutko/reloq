<?php
require_once 'config.php';
//var_dump($_GET);
if(!isset($_GET['id']))
{
    $user = new \Models\User();
    $user->name = $_GET['name'];
    $user->last_name = $_GET['last_name'];
    $user->age = $_GET['age'];
    $user->save();
}
else
{
    $user = \Models\User::find($_GET['id']);
    $user->name = $_GET['name'];
    $user->last_name = $_GET['last_name'];
    $user->age = $_GET['age'];
    $user->save();
}


header("Location: http://".$_SERVER['HTTP_HOST']);