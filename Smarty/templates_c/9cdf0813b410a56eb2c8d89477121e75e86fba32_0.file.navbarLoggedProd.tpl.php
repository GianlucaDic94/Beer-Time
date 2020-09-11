<?php
/* Smarty version 3.1.33, created on 2020-06-01 11:11:17
  from 'C:\xampp\htdocs\Beer-Time\Smarty\templates\navbarLoggedProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed4c6355302a4_98264496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cdf0813b410a56eb2c8d89477121e75e86fba32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Beer-Time\\Smarty\\templates\\navbarLoggedProd.tpl',
      1 => 1590658695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed4c6355302a4_98264496 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="/Beer-Time/Smarty/templates/css/theme.css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar6">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar6"> <a class="navbar-brand text-primary d-none d-md-block" href="/Beer-Time/Utente/logIn">
          <i class="fa d-inline fa-lg fa-circle"></i>
          <b> BeerTime</b>
        </a>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="/Beer-Time/Gestione/Catalogo">Catalogo</a> </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link" href="/Beer-Time/Profilo/Profilo">Profilo</a> </li></a> </li>
          <li class="nav-item"> <a class="nav-link" href="/Beer-Time/Utente/LogOut">LogOut</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="alert alert-primary" role="alert" hidden>
    <button type="button" class="close" data-dismiss="alert">×</button>
    <h4 class="alert-heading" >Well done!</h4>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
  </div>
</body>

</html><?php }
}
