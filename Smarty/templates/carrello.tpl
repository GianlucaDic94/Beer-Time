<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.2.1.css">
</head>

<body>
  {include 'navbarLogged.tpl'}
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
                  <td>{if isset($carrello.0.0)}
                      {$carrello.0.0}{/if}</td>
                  <td>{if isset($carrello.0.1)}
                      {$carrello.0.1}{/if}</td>
                  <td> {if isset($carrello.0.2)}
                      {$carrello.0.2}${/if}</td>
                  <td {if isset($carrello.0.0)} <a class="btn btn-outline-primary" href="/Beer-Time/Acquisto/Rimuovi?0">Rimuovi</a>{/if}</td>
                </tr>
                <tr>
                  <td>{if isset($carrello.1.0)}
                      {$carrello.1.0}{/if}</td>
                  <td>{if isset($carrello.1.1)}
                      {$carrello.1.1}{/if}</td>
                  <td>{if isset($carrello.1.2)}
                      {$carrello.1.2}${/if}</td>
                  <td> {if isset($carrello.1.0)} <a class="btn btn-outline-primary" href="/Beer-Time/Acquisto/Rimuovi?1">Rimuovi</a>{/if}</td>
                </tr>
                <tr>
                  <td>{if isset($carrello.2.0)}
                      {$carrello.2.0}{/if}</td>
                  <td>{if isset($carrello.2.1)}
                      {$carrello.2.1}{/if}</td>
                  <td>{if isset($carrello.2.2)}
                      {$carrello.2.2}${/if}</td>
                  <td> {if isset($carrello.2.0)} <a class="btn btn-outline-primary" href="/Beer-Time/Acquisto/Rimuovi?2">Rimuovi</a>{/if}</td>
                </tr>
                <tr>
                  <td>{if isset($carrello.3.0)}
                      {$carrello.3.0}{/if}</td>
                  <td>{if isset($carrello.3.1)}
                      {$carrello.3.1}{/if}</td>
                  <td>{if isset($carrello.3.2)}
                      {$carrello.3.2}${/if}</td>
                  <td {if isset($carrello.3.0)} <a class="btn btn-outline-primary" href="/Beer-Time/Acquisto/Rimuovi?3">Rimuovi</a>{/if}</td>
                </tr>
                <tr>
                  <td>{if isset($carrello.4.0)}
                      {$carrello.4.0}{/if}</td>
                  <td>{if isset($carrello.4.1)}
                      {$carrello.4.1}{/if}</td>
                  <td>{if isset($carrello.4.2)}
                      {$carrello.4.2}${/if}</td>
                  <td {if isset($carrello.4.0)} <a class="btn btn-outline-primary" href="#">Rimuovi</a>{/if}</td>
                </tr>
                <tr>
                  <td>{if isset($carrello.5.0)}
                      {$carrello.5.0}{/if}</td>
                  <td>{if isset($carrello.5.1)}
                      {$carrello.5.1}{/if}</td>
                  <td>{if isset($carrello.5.2)}
                      {$carrello.5.2}${/if}</td>
                  <td {if isset($carrello.5.0)} <a class="btn btn-outline-primary" href="#">Rimuovi</a>{/if}</td>
                </tr>
                <tr>
                  <td>{if isset($carrello.6.0)}
                      {$carrello.6.0}{/if}</td>
                  <td>{if isset($carrello.6.1)}
                      {$carrello.6.1}{/if}</td>
                  <td>{if isset($carrello.6.2)}
                      {$carrello.6.2}${/if}</td>
                  <td {if isset($carrello.6.0)} <a class="btn btn-outline-primary" href="#">Rimuovi</a>{/if}</td>
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
          <h1 >Totale: {$carrello.{$size-1}}</h1>
        </div>
        <div class="col-md-6 w-25" style=""><a class="btn btn-outline-primary ml-5 my-2 w-25" href="/Beer-Time/Acquisto/Pagamento?{$carrello.{$size-1}}">Acquista <i class="fa fa-shopping-cart fa-fw"></i> </a></div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>

</html>