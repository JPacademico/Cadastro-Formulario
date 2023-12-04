<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <header class="cabecalho"><strong>Log-in</strong></header>
  <form class="login-screen" action="index.php">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">User</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
    </div>
    <div class="mb-3 form-check">
      <button type="submit" class="btn btn-primary"><strong>Entrar</strong></button>
      <a href="" class="esqueci">Forgot password?</a>
    </div>

  </form>

</body>

</html>