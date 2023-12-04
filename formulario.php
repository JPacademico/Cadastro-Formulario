<?php

if (isset($_POST["submit"])) {
  include_once("config.php");
  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];
  $logradouro = $_POST["lugar"];
  $complemento = $_POST["complemento"];
  $cidade = $_POST["cidade"];
  $estado = $_POST["estado"];

  $dados = mysqli_query($conexao, "INSERT INTO form(nome,sobrenome,logradouro,complemento,cidade,estado) VALUES ('$nome','$sobrenome','$logradouro','$complemento','$cidade','$estado')");

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style2.css">
  <title>Document</title>
</head>

<body>
  <header class="cabecario"><strong>Informe seus dados</strong></header>
  <form class="row g-3" action="formulario.php" method="post">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Nome</label>
      <input type="name" name="nome" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Sobrenome</label>
      <input type="name-b" name="sobrenome" class="form-control" id="inputPassword4">
    </div>
    <div class="inline">
      <div class="col-12">
        <label for="inputAddress" class="form-label">Logradouro</label>
        <input type="text" name="lugar" class="form-control" id="inputAddress" placeholder="Ex. Rua principal 123">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Complemento</label>
        <input type="text" name="complemento" class="form-control" id="inputAddress2" placeholder="(opcional)">
      </div>
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Cidade</label>
      <input type="text" name="cidade" class="form-control" id="inputCity">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">Estado</label>
      <input type="text" name="estado" id="inputState" na class="form-control">
    </div>
    <div class="col-12">
      <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </form>
</body>

</html>