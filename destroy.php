<?php
require_once 'config.php';

\Models\User::destroy(trim(htmlspecialchars($_GET['id'])));

header("Location: http://".$_SERVER['HTTP_HOST']);