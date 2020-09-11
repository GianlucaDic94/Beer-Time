<?php
/* Smarty version 3.1.33, created on 2020-09-04 15:55:40
  from 'C:\xampp\htdocs\Beer-Time\Smarty\templates\productsProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f52475c201ea4_71557919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9c3dae3e41b4d74683ecb62faf61d31075fc0dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Beer-Time\\Smarty\\templates\\productsProd.tpl',
      1 => 1599227711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbarLoggedProd.tpl' => 1,
  ),
),false)) {
function content_5f52475c201ea4_71557919 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.2.1.css">
</head>

<body>
<?php $_smarty_tpl->_subTemplateRender('file:navbarLoggedProd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="pt-5 pb-3 text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="mb-3" ><a href="/Beer-Time/Gestione/Aggiungi">Aggiungi Prodotto</a> </h3>
        <p class="lead"><br> </p>
      </div>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['bottiglie']->value[0])) {?>
    <div class="row">
      <div  class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[0]['Nome'];?>
">
          <img  src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[0]['Stile'];?>
.jpg"  width="200" height="300">
          <h4 class="mt-3 mb-0"> <b><?php if (isset($_smarty_tpl->tpl_vars['bottiglie']->value[0])) {?> <?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[0]['Nome'];?>
 <?php }?></b> </h4></a>
        <br>
        <a href="/Beer-Time/Gestione/Rimuovi/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[0]['Nome'];?>
" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
      </div>
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['bottiglie']->value[1])) {?>
        <div class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[1]['Nome'];?>
">
            <img  src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[1]['Stile'];?>
.jpg" width="200" height="300" >
            <h4 class="mt-3 mb-0"> <b><?php if (isset($_smarty_tpl->tpl_vars['bottiglie']->value[1])) {?> <?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[1]['Nome'];?>
 <?php }?> </b> </h4></a>
          <br>
          <a href="/Beer-Time/Gestione/Rimuovi/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[1]['Nome'];?>
" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
          <div class="row"></div>
        </div>
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['bottiglie']->value[2])) {?>
        <div class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[2]['Nome'];?>
">
            <img  src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[2]['Stile'];?>
.jpg" width="200" height="300">
            <h4 class="mt-3 mb-0"> <b><?php if (isset($_smarty_tpl->tpl_vars['bottiglie']->value[2])) {?> <?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[2]['Nome'];?>
 <?php }?></b> </h4> </a>
          <br>
          <a href="/Beer-Time/Gestione/Rimuovi/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[2]['Nome'];?>
" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
        </div>
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['bottiglie']->value[3])) {?>
      <div class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[3]['Nome'];?>
">
          <img  src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[3]['Stile'];?>
.jpg" width="200" height="300">
          <h4 class="mt-3 mb-0"> <b><?php if (isset($_smarty_tpl->tpl_vars['bottiglie']->value[3])) {?> <?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[3]['Nome'];?>
 <?php }?></b> </h4></a>
        <br>
        <a href="/Beer-Time/Gestione/Rimuovi/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[3]['Nome'];?>
" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
      </div>
    </div>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['bottiglie']->value[4])) {?>
    <div class="row">
      <div class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[4]['Nome'];?>
">
          <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[4]['Nome'];?>
">
            <img  src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[4]['Stile'];?>
.jpg"  width="200" height="300">
            <h4 class="mt-3 mb-0"> <b><?php if (isset($_smarty_tpl->tpl_vars['bottiglie']->value[4])) {?> <?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[4]['Nome'];?>
 <?php }?></b> </h4> </a>
          <br>
          <a href="/Beer-Time/Gestione/Rimuovi/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[4]['Nome'];?>
" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
      </div>
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['bottiglie']->value[5])) {?>
        <div class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[5]['Nome'];?>
">
            <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[5]['Nome'];?>
">
              <img  src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[5]['Stile'];?>
.jpg" width="200" height="300" >
              <h4 class="mt-3 mb-0"> <b><?php if (isset($_smarty_tpl->tpl_vars['bottiglie']->value[5])) {?> <?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[5]['Nome'];?>
 <?php }?></b> </h4> </a>
            <br>
            <a href="/Beer-Time/Gestione/Rimuovi/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[5]['Nome'];?>
" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
            <div class="row"></div>
        </div>
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['bottiglie']->value[6])) {?>
        <div class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[6]['Nome'];?>
">
            <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[6]['Nome'];?>
">
              <img src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[6]['Stile'];?>
.jpg" width="200" height="300">
              <h4 class="mt-3 mb-0"> <b><?php if (isset($_smarty_tpl->tpl_vars['bottiglie']->value[6])) {?> <?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[6]['Nome'];?>
 <?php }?></b> </h4> </a>
            <br>
            <a href="/Beer-Time/Gestione/Rimuovi/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[6]['Nome'];?>
" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
        </div>
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['bottiglie']->value[7])) {?>
        <div class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[7]['Nome'];?>
">
            <a href="/Beer-Time/Acquisto/Prodotto?<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[7]['Nome'];?>
">
              <img  src="/Beer-Time/Smarty/templates/images/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[7]['Stile'];?>
.jpg" width="200" height="300">
              <h4 class="mt-3 mb-0"> <b><?php if (isset($_smarty_tpl->tpl_vars['bottiglie']->value[7])) {?> <?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[7]['Nome'];?>
 <?php }?></b> </h4> </a>
            <br>
            <a href="/Beer-Time/Gestione/Rimuovi/<?php echo $_smarty_tpl->tpl_vars['bottiglie']->value[7]['Nome'];?>
" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
        </div>
      <?php }?>
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
