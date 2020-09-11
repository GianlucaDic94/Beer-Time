<?php
/* Smarty version 3.1.33, created on 2020-09-06 21:52:36
  from 'C:\xampp\htdocs\Beer-Time\Smarty\templates\profilo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f553e043f6e02_78649598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f58326feefc4db40219dadfb7a3d1dddc7892a7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Beer-Time\\Smarty\\templates\\profilo.tpl',
      1 => 1599421901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbarLogged.tpl' => 1,
  ),
),false)) {
function content_5f553e043f6e02_78649598 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.2.1.css">
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:navbarLogged.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="py-3 text-center">
    <div class="container">
      <div class="row ml-0" style="">
        <div class="mx-auto p-4 col-lg-7">
          <h1 class="mb-4">Informazioni personali</h1>
          <h4>Inserisci i campi da modificare</h4>
          <form method="post" action="/Beer-Time/Profilo/Modifica">
            <div class="form-row">
              <div class="form-group col-md-6"><label>Nome</label> <input type="text" class="form-control" id="form27" placeholder=<?php echo $_smarty_tpl->tpl_vars['utente']->value['Nome'];?>
 name="Nome"> </div>
              <div class="form-group col-md-6"><label>Username</label> <input type="text" class="form-control" id="form28" placeholder=<?php echo $_smarty_tpl->tpl_vars['utente']->value['Username'];?>
 name="Username"> </div>
            </div>
            <div class="form-group"><label>Password</label> <input type="password" class="form-control" id="form29"  name="Password">
              <div class="form-group"><label>Email</label><input type="email" class="form-control" id="form29" placeholder="<?php echo $_smarty_tpl->tpl_vars['utente']->value['Email'];?>
" name="Email"></div>
            </div>
            <button type="submit" class="btn btn-primary">Salva</button>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">Ordini Effettuati</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Data</th>
                  <th>Totale</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['ordini']->value[0])) {?> <?php echo $_smarty_tpl->tpl_vars['ordini']->value[0]['Id'];?>
 <?php }?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['ordini']->value[0])) {?> <?php echo $_smarty_tpl->tpl_vars['ordini']->value[0]['Data'];?>
 <?php }?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['ordini']->value[0])) {?> <?php echo $_smarty_tpl->tpl_vars['ordini']->value[0]['Totale'];?>
$ <?php }?></td>
                </tr>
                <tr>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['ordini']->value[1])) {?> <?php echo $_smarty_tpl->tpl_vars['ordini']->value[1]['Id'];?>
 <?php }?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['ordini']->value[1])) {?> <?php echo $_smarty_tpl->tpl_vars['ordini']->value[1]['Data'];?>
 <?php }?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['ordini']->value[1])) {?> <?php echo $_smarty_tpl->tpl_vars['ordini']->value[1]['Totale'];?>
$ <?php }?></td>
                </tr>
                <tr>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['ordini']->value[2])) {?> <?php echo $_smarty_tpl->tpl_vars['ordini']->value[2]['Id'];?>
 <?php }?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['ordini']->value[2])) {?> <?php echo $_smarty_tpl->tpl_vars['ordini']->value[2]['Data'];?>
 <?php }?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['ordini']->value[2])) {?> <?php echo $_smarty_tpl->tpl_vars['ordini']->value[2]['Totale'];?>
$ <?php }?> </td>
                </tr>
              </tbody>
            </table>
          </div>
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
