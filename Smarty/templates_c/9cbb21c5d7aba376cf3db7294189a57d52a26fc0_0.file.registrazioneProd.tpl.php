<?php
/* Smarty version 3.1.33, created on 2020-05-28 10:23:44
  from 'C:\xampp\htdocs\Beer-Time\Smarty\templates\registrazioneProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecf75106f9e46_51169296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cbb21c5d7aba376cf3db7294189a57d52a26fc0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Beer-Time\\Smarty\\templates\\registrazioneProd.tpl',
      1 => 1590169353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5ecf75106f9e46_51169296 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="py-3" style="	background-image: url(/Beer-Time/Smarty/templates/images/banner.jpg);	background-position: top left;	background-size: 100%;	background-repeat: repeat;	min-height: 1080px;">
    <div class="container">
      <div class="row">
        <div class="col-md-8 p-4">
          <h1 class="text-light">Registrati</h1>
          <p class="text-black">Avrai accesso all'intero catalogo di prodotti in un attimo</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 p-4"></div>
        <div class="col-md-7 p-4">
          <h3 class="mb-3 text-dark">Sei un produttore? <a href=""Registrati qui></a> </h3>
          <form method="post" target="_self" action="/Beer-Time/Utente/registrazione">
            <div class="form-row">
              <div class="form-group col-md-12"> <input type="text" class="form-control" id="form36" placeholder="Nome Completo" name="Nome"> </div>
            </div>
            <div class="form-group"> <input  min="3" max="15" type="text" class="form-control" id="form38" placeholder="Username" required="required" name="Username"> </div>
            <div class="form-group"> <input min="7" max="20" type="email" class="form-control" id="form39" placeholder="Email" required="required" name="Email"> </div>
            <div class="form-group"> <input min="4" max="15" type="password" class="form-control" id="form42" placeholder="Password" required="required" name="Password"> </div>
            <div class="form-group"> <input type="text" class="form-control" id="form38" placeholder="Indirizzo" required="required" name="Indirizzo"> </div>
            <button type="submit" class="btn btn-primary">Registrati</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
