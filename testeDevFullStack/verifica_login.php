<?php

require_once("db_classes.php");

$login = $_POST['email'];
$senha = $_POST['password'];

$query = "SELECT * FROM usuario WHERE email_user = :email AND senha = :senha";




?>