<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.2.1.css">
</head>

<body>
{include 'navbarLoggedProd.tpl'}
<div class="pt-5 pb-3 text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="mb-3" ><a href="/Beer-Time/Gestione/Aggiungi">Aggiungi Prodotto</a> </h3>
        <p class="lead"><br> </p>
      </div>
    </div>
    {if !empty($bottiglie[0])}
    <div class="row">
      <div  class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?{$bottiglie[0].Nome}">
          <img  src="/Beer-Time/Smarty/templates/images/{$bottiglie[0].Stile}.jpg"  width="200" height="300">
          <h4 class="mt-3 mb-0"> <b>{if isset($bottiglie[0])} {$bottiglie[0].Nome} {/if}</b> </h4></a>
        <br>
        <a href="/Beer-Time/Gestione/Rimuovi/{$bottiglie[0].Nome}" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
      </div>
      {/if}
      {if !empty($bottiglie[1])}
        <div class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?{$bottiglie[1].Nome}">
            <img  src="/Beer-Time/Smarty/templates/images/{$bottiglie[1].Stile}.jpg" width="200" height="300" >
            <h4 class="mt-3 mb-0"> <b>{if isset($bottiglie[1])} {$bottiglie[1].Nome} {/if} </b> </h4></a>
          <br>
          <a href="/Beer-Time/Gestione/Rimuovi/{$bottiglie[1].Nome}" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
          <div class="row"></div>
        </div>
      {/if}
      {if !empty($bottiglie[2])}
        <div class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?{$bottiglie[2].Nome}">
            <img  src="/Beer-Time/Smarty/templates/images/{$bottiglie[2].Stile}.jpg" width="200" height="300">
            <h4 class="mt-3 mb-0"> <b>{if isset($bottiglie[2])} {$bottiglie[2].Nome} {/if}</b> </h4> </a>
          <br>
          <a href="/Beer-Time/Gestione/Rimuovi/{$bottiglie[2].Nome}" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
        </div>
      {/if}
      {if !empty($bottiglie[3])}
      <div class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?{$bottiglie[3].Nome}">
          <img  src="/Beer-Time/Smarty/templates/images/{$bottiglie[3].Stile}.jpg" width="200" height="300">
          <h4 class="mt-3 mb-0"> <b>{if isset($bottiglie[3])} {$bottiglie[3].Nome} {/if}</b> </h4></a>
        <br>
        <a href="/Beer-Time/Gestione/Rimuovi/{$bottiglie[3].Nome}" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
      </div>
    </div>
    {/if}
    {if !empty($bottiglie[4])}
    <div class="row">
      <div class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?{$bottiglie[4].Nome}">
          <a href="/Beer-Time/Acquisto/Prodotto?{$bottiglie[4].Nome}">
            <img  src="/Beer-Time/Smarty/templates/images/{$bottiglie[4].Stile}.jpg"  width="200" height="300">
            <h4 class="mt-3 mb-0"> <b>{if isset($bottiglie[4])} {$bottiglie[4].Nome} {/if}</b> </h4> </a>
          <br>
          <a href="/Beer-Time/Gestione/Rimuovi/{$bottiglie[4].Nome}" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
      </div>
      {/if}
      {if !empty($bottiglie[5])}
        <div class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?{$bottiglie[5].Nome}">
            <a href="/Beer-Time/Acquisto/Prodotto?{$bottiglie[5].Nome}">
              <img  src="/Beer-Time/Smarty/templates/images/{$bottiglie[5].Stile}.jpg" width="200" height="300" >
              <h4 class="mt-3 mb-0"> <b>{if isset($bottiglie[5])} {$bottiglie[5].Nome} {/if}</b> </h4> </a>
            <br>
            <a href="/Beer-Time/Gestione/Rimuovi/{$bottiglie[5].Nome}" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
            <div class="row"></div>
        </div>
      {/if}
      {if !empty($bottiglie[6])}
        <div class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?{$bottiglie[6].Nome}">
            <a href="/Beer-Time/Acquisto/Prodotto?{$bottiglie[6].Nome}">
              <img src="/Beer-Time/Smarty/templates/images/{$bottiglie[6].Stile}.jpg" width="200" height="300">
              <h4 class="mt-3 mb-0"> <b>{if isset($bottiglie[6])} {$bottiglie[6].Nome} {/if}</b> </h4> </a>
            <br>
            <a href="/Beer-Time/Gestione/Rimuovi/{$bottiglie[6].Nome}" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
        </div>
      {/if}
      {if !empty($bottiglie[7])}
        <div class="col-md-3 col-6 p-4"> <a href="/Beer-Time/Acquisto/Prodotto?{$bottiglie[7].Nome}">
            <a href="/Beer-Time/Acquisto/Prodotto?{$bottiglie[7].Nome}">
              <img  src="/Beer-Time/Smarty/templates/images/{$bottiglie[7].Stile}.jpg" width="200" height="300">
              <h4 class="mt-3 mb-0"> <b>{if isset($bottiglie[7])} {$bottiglie[7].Nome} {/if}</b> </h4> </a>
            <br>
            <a href="/Beer-Time/Gestione/Rimuovi/{$bottiglie[7].Nome}" class="btn btn-lg btn-primary mx-1">Rimuovi</a>
        </div>
      {/if}
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>