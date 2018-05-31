<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Mercado Mega Power</title>
  </head>
  <body>
  <main>
  <div id="login">
        <img src="imagens/logo.png" alt="Logo do site" id="logo">
        <form name="form1" method="post" action="app/verifyLogin.php" data-parsley-validate>
            <label for="login">Login</label>
            <input type="text" name="login" required class="form-control" placeholder="Digite seu usuário" data-parsley-required-message="Preencha o Login">
            <br>

            <label for="senha">Senha</label>
            <input type="password" name="senha" required class="form-control" placeholder="Digite sua senha" data-parsley-required-message="Preencha a Senha">
            <br>

            <button type="submit" class="btn btn-primary">Efetuar Login <i class="fa fa-paper-plane"></i></button>
            </form>
    </div>
  </div><!-- fim do card -->
  </div>

  </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>