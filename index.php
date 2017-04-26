<?php
require 'config.php';
$users = \Models\User::all();

$login = "";
$email= "";
$password = "";
$id = $_GET['id'];

if(isset($id))
{
    $user = \Models\User::find($id);
    $login = $user->login;
    $email = $user->email;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Starter Template for Bootstrap</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <? require_once 'nav.php' ?>
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                <form action="create_user.php" method="get" role="form">
                    <legend>Добавить юзера</legend>
                    <div class="form-group">
                        <label for="">login:</label>
                        <input type="text" class="form-control" name="login" id="" placeholder="" value="<?= $login ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" name="email" id="" placeholder=""
                               value="<?= $email ?>" required >
                    </div>
                    <div class="form-group">
                        <label for="">Пароль:</label>
                        <input type="password" class="form-control" name="password" id="" placeholder="" value="" required min="6" max="15" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
                    </div>
                    <div class="form-group">
                        <label for="">Повторить пароль:</label>
                        <input type="password" class="form-control" name="password_confirm" id="" placeholder="" value="" required>
                    </div>
                        <input type="hidden" name = "id" value="<?=$id?>">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Логин</th>
                        <th>Email</th>
                        <th>Пароль</th>
                        <th>Token</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td><?= $user->id; ?></td>
                            <td><?= $user->login; ?></td>
                            <td><?= $user->email; ?></td>
                            <td><?= $user->password_crypt; ?></td>
                            <td><?= $user->token; ?></td>
                            <td><a href="/?id=<?= $user->id; ?>" class="btn btn-primary btn-xs">Редактировать</a></td>
                            <td><a href="destroy.php?id=<?= $user->id; ?>" class="btn btn-danger btn-xs">Удалить</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
