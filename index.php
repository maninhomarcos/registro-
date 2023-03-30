<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="site básico de registro">
    <meta name="keywords" content="user,senha and log">
    <meta name="author" content="Marcos André De S. Santo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Contatos responsiva</title>
  
  </head>
<body>


  <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12"  align="center">
    <h1>Cadastro Agenda</h1>
  </div>
    
   
    

    <form action="" method="post">
      <div class="form-group">
        <div class="col-md-6 offset-md-3">
          <label for="Nome" class="form-label">Nome:</label>
          <input type="text" name="Nome" class="form-control" id="Nome" aria-describedby="emailHelp">    
        </div>
      </div>

      
      <div class="form-group">
        <div class="col-md-6 offset-md-3">
          <label for="Numero" class="form-label">Numero</label>
          <input type="text"name="Numero" class="form-control" id="Numero">
        </div>
      </div>
      <br>


      <div class="form-group">
        <div class="col-md-6 offset-md-5">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </div>

      
    </form>
    

<div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12"  align="center">

  <?php

    




include "conexao.php";




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $nome = $_POST["Nome"];
  $numero = $_POST["Numero"];

  
  $sql = "INSERT INTO contatos (Nome, Numero) VALUES ('$nome', '$numero')";
  if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso"."<br>";
  } else {
    echo "Erro ao inserir dados: " . $conn->error;
  }
}
$conn->close();
?>
  
  <a color="red" href="https://marcoskhrbfkjqwh.000webhostapp.com/novo/resultados.php">lista</a>

</div><br>

    
    
</body>
</html>