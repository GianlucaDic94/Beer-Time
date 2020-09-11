<?php
/* Smarty version 3.1.33, created on 2020-08-03 16:58:19
  from 'C:\xampp\htdocs\Beer-Time\Smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f28260b455aa0_50520587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fa83dc8ac6cd33b3b884000103aea45e3bc8ee6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Beer-Time\\Smarty\\templates\\index.tpl',
      1 => 1596466690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5f28260b455aa0_50520587 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
</head>

<body onload="checkCookie()">
<?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="modal-content" hidden id="cookie">
  <div class="modal-header">
  </div>
  <div class="modal-body">
    <p>Questo sito utilizza cookie per garantire i servizi di negozio elettronico, in accordo con le direttive sui cookie</p>
    <p id="cookie2" hidden>ATTENZIONE: I cookie sono disabilitati nel tuo browser!</p>
  </div>
  <div class="modal-footer"> <button onclick="hide()" type="button" class="btn btn-primary">Accetto</button>  </div>
</div>
  <div class="py-5 text-center text-white h-100 align-items-center d-flex w-100" style="	background-image: url(/Beer-Time/Smarty/templates/images/banner.jpg);	background-position: center center;	background-size: cover;	background-repeat: repeat;	max-width: 100%;	max-height: 100%;	min-height: 1080px;">
    <div class="container py-5">
      <div class="row">
        <div class="mx-auto col-lg-8 col-md-10">
          <h1 class="display-3 mb-4">Beertime<br></h1>
          <p class="lead mb-5">Vera birra artigianale, direttamente dai migliori produttori italiani</p> <a href="/Beer-Time/Utente/registrazione" class="btn btn-lg btn-primary mx-1">Registrati</a> <a class="btn btn-lg mx-1 btn-outline-light" href="/Beer-Time/Utente/logIn">Accedi<br></a>
        </div>
      </div>
    </div>
  </div>
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/Beer-Time/Smarty/templates/js/cookie.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
