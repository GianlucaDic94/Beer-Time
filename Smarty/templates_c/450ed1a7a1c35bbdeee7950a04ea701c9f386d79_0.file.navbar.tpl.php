<?php
/* Smarty version 3.1.33, created on 2020-05-28 11:49:12
  from 'C:\xampp\htdocs\Beer-Time\Smarty\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecf89185165b2_94256521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '450ed1a7a1c35bbdeee7950a04ea701c9f386d79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Beer-Time\\Smarty\\templates\\navbar.tpl',
      1 => 1590658663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecf89185165b2_94256521 (Smarty_Internal_Template $_smarty_tpl) {
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
      <div class="collapse navbar-collapse" id="navbar6"> <a class="navbar-brand text-primary d-none d-md-block" href="/Beer-Time/">
          <i class="fa d-inline fa-lg fa-circle"></i>
          <b> BeerTime</b>
        </a>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="/Beer-Time/Acquisto/Catalogo?1">Birre</a> </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link" href="/Beer-Time/Utente/logIn">Accedi</a> </li>
          <li class="nav-item"> <a class="nav-link text-primary" href="/Beer-Time/Utente/registrazione">Registrati</a> </li>
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
