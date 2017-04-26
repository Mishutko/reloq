<?php
require "../config.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('Users', function ($table)
{
    $table->increments('id');
    $table->string('login');
    $table->string('email');
    $table->string('password_crypt');
    $table->string('token');
    $table->timestamps();
});