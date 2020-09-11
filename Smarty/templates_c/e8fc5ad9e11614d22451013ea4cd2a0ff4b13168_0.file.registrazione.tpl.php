<?php
/* Smarty version 3.1.33, created on 2020-09-02 14:01:11
  from 'C:\xampp\htdocs\Beer-Time\Smarty\templates\registrazione.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4f8987de5f24_20042257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8fc5ad9e11614d22451013ea4cd2a0ff4b13168' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Beer-Time\\Smarty\\templates\\registrazione.tpl',
      1 => 1599048066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5f4f8987de5f24_20042257 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div   class="col-md-7 p-4">
          <h3   class="mb-3 text-primary"> <a href="/Beer-Time/Utente/registrazioneProd">Sei un produttore? Registrati qui!</a></h3>
          <form method="post" target="_self" action="/Beer-Time/Utente/registrazione">
            <div class="form-row">
              <div class="form-group col-md-12"> <input  type="text" class="form-control" id="form36" placeholder="Nome Completo" name="Nome"> </div>
            </div>
            <div class="form-group"><label hidden id="label1"></label> <input onchange="checkUsername(this.value)" type="text" class="form-control" id="form38" placeholder="Username" required="required" name="Username">  </div>
            <div class="form-group"><label hidden id="label2"></label> <input onchange="checkEmail(this.value)" min="7" max="20" type="email" class="form-control" id="form39" placeholder="Email" required="required" name="Email"> </div>
            <div class="form-group"> <input min="4" max="15" type="password" class="form-control" id="form42" placeholder="Password" required="required" name="Password"> </div>
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
    <?php echo '<script'; ?>
 src="/Beer-Time/Smarty/templates/js/input.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
