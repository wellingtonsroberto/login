<!-- Validador de Sessão -->
<?php
session_start();
 
require_once 'config/init.php';

require 'check.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta charset=utf-8>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    
    <!-- Arquivos CSS -->
    <link href="css/estilo.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    </head>
<body>  

       
    <!-- Bloco Login -->
    <div class="bloco_login">
    <div class="bloco_input">
     
    <h1>Logado</h1>
    
     <!-- Bloco Menu -->
    <a href="view/logout.php"><span class="menu-item">SAIR</span>

    </div>
    </div>

