<?php
require_once 'config.php';

$faker = Faker\Factory::create();

//for($i = 0; $i < 20; $i++)
//{
//    $user = new \Models\User();
//    $user->name = $faker->firstName;
//    $user->last_name = $faker->lastName;
//    $user->age = rand(18, 80);
//    $user->save();
//}

for($i = 0; $i < 60; $i++)
{
    $book = new \Models\Book();
    $book->title = $faker->sentence;
    $book->little_text = $faker->text(150);
    $book->user_id = rand(67, 82);
    $book->save();
}
echo 'gg';