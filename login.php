<?php
session_start();

$users = [
  "admin" => "12345",
  "alumno" => "itca"
];

$user = trim($_POST['user'] ?? '');
$pass = trim($_POST['pass'] ?? '');

if($user === '' || $pass === ''){
  header("Location: index.php?err=Debes completar todos los campos");
  exit;
}

if(isset($users[$user]) && $users[$user] === $pass){
  $_SESSION['user'] = $user;
  header("Location: dashboard.php");
} else {
  header("Location: index.php?err=Credenciales incorrectas");
}
