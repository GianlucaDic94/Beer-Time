<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
</head>

<body>
  {include 'navbar.tpl'}
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="/Beer-Time/Smarty/templates/js/input.js"></script>
</body>

</html>