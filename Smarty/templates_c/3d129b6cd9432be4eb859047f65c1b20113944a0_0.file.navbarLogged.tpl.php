<?php
/* Smarty version 3.1.33, created on 2020-06-01 11:11:52
  from 'C:\xampp\htdocs\Beer-Time\Smarty\templates\navbarLogged.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed4c65879db92_05521456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d129b6cd9432be4eb859047f65c1b20113944a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Beer-Time\\Smarty\\templates\\navbarLogged.tpl',
      1 => 1590658677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed4c65879db92_05521456 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="/Beer-Time/Smarty/templates/css/theme.css">
</head>

<body >
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
          <li class="nav-item"> <a id="ab" class="nav-link" href="/Beer-Time/Profilo/Profilo">Profilo</a> </li>
          <li class="nav-item"> <a class="nav-link text-primary" href="/Beer-Time/Acquisto/CheckOut">Carrello</a> </li>
          <li class="nav-item"> <a class="nav-link" href="/Beer-Time/Utente/LogOut">LogOut</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="toast1" class="alert alert-primary" role="alert" hidden>
    <button type="button" class="close" data-dismiss="alert">×</button>
    <h4 class="alert-heading" >Well done!</h4>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
  </div>
</body>

<?php echo '<script'; ?>
 src="/Beer-Time/Smarty/templates/js/toast.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
</html><?php }
}
