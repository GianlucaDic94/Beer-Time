<?php
/* Smarty version 3.1.33, created on 2020-09-10 10:45:50
  from 'C:\xampp\htdocs\Beer-Time\Smarty\templates\carrello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f59e7bea15756_64854858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02644af50875c8fb83a7dad3cd1cd6d39fcd5395' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Beer-Time\\Smarty\\templates\\carrello.tpl',
      1 => 1599727415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbarLogged.tpl' => 1,
  ),
),false)) {
function content_5f59e7bea15756_64854858 (Smarty_Internal_Template $_smarty_tpl) {
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
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Prodotto</th>
                  <th>Quantità</th>
                  <th>Prezzo</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[0][0])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[0][0];
}?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[0][1])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[0][1];
}?></td>
                  <td> <?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[0][2])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[0][2];?>
$<?php }?></td>
                  <td <?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[0][0])) {?> <a class="btn btn-outline-primary" href="/Beer-Time/Acquisto/Rimuovi?0">Rimuovi</a><?php }?></td>
                </tr>
                <tr>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[1][0])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[1][0];
}?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[1][1])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[1][1];
}?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[1][2])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[1][2];?>
$<?php }?></td>
                  <td> <?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[1][0])) {?> <a class="btn btn-outline-primary" href="/Beer-Time/Acquisto/Rimuovi?1">Rimuovi</a><?php }?></td>
                </tr>
                <tr>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[2][0])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[2][0];
}?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[2][1])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[2][1];
}?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[2][2])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[2][2];?>
$<?php }?></td>
                  <td> <?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[2][0])) {?> <a class="btn btn-outline-primary" href="/Beer-Time/Acquisto/Rimuovi?2">Rimuovi</a><?php }?></td>
                </tr>
                <tr>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[3][0])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[3][0];
}?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[3][1])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[3][1];
}?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[3][2])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[3][2];?>
$<?php }?></td>
                  <td <?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[3][0])) {?> <a class="btn btn-outline-primary" href="/Beer-Time/Acquisto/Rimuovi?3">Rimuovi</a><?php }?></td>
                </tr>
                <tr>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[4][0])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[4][0];
}?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[4][1])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[4][1];
}?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[4][2])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[4][2];?>
$<?php }?></td>
                  <td <?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[4][0])) {?> <a class="btn btn-outline-primary" href="#">Rimuovi</a><?php }?></td>
                </tr>
                <tr>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[5][0])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[5][0];
}?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[5][1])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[5][1];
}?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[5][2])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[5][2];?>
$<?php }?></td>
                  <td <?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[5][0])) {?> <a class="btn btn-outline-primary" href="#">Rimuovi</a><?php }?></td>
                </tr>
                <tr>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[6][0])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[6][0];
}?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[6][1])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[6][1];
}?></td>
                  <td><?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[6][2])) {?>
                      <?php echo $_smarty_tpl->tpl_vars['carrello']->value[6][2];?>
$<?php }?></td>
                  <td <?php if (isset($_smarty_tpl->tpl_vars['carrello']->value[6][0])) {?> <a class="btn btn-outline-primary" href="#">Rimuovi</a><?php }?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 w-75">
          <h1 >Totale: <?php echo $_smarty_tpl->tpl_vars['carrello']->value[$_smarty_tpl->tpl_vars['size']->value-1];?>
</h1>
        </div>
        <div class="col-md-6 w-25" style=""><a class="btn btn-outline-primary ml-5 my-2 w-25" href="/Beer-Time/Acquisto/Pagamento?<?php echo $_smarty_tpl->tpl_vars['carrello']->value[$_smarty_tpl->tpl_vars['size']->value-1];?>
">Acquista <i class="fa fa-shopping-cart fa-fw"></i> </a></div>
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
