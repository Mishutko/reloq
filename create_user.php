<?php
require_once 'config.php';

$userCheck = \Models\User::all()->where('login', '=', $_GET['login'])->first;

if(is_null($userCheck->login))
{
    $user = new \Models\User();
    $user->login = $_GET['login'];
    $user->email = $_GET['email'];
    $user->password_crypt = crypt($_GET['password']);
    $user->token = generateSalt();
    $user->save();
}

function generateSalt()
{
    $salt = '';
    $saltLength = 8; //длина соли
    for($i = 0; $i < $saltLength; $i++)
    {
        $salt .= chr(mt_rand(33, 126)); //символ из ASCII-table
    }
    return $salt;
}

header("Location: http://".$_SERVER['HTTP_HOST']);