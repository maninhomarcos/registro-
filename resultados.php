<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="site básico de registro">
    <meta name="keywords" content="user,senha and log">
    <meta name="author" content="Marcos André De S. Santo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabela</title>
</head>

<body>
    <div class="container">
        <h1>contatos</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>  
                    <th>Numero</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "conexao.php";

                $sql = "SELECT Nome, Numero FROM contatos";
                $resultado = $conn->query($sql);
                if ($resultado->num_rows > 0) {
                    while ($linha = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $linha["Nome"] . "</td>";
                        echo "<td>" . $linha["Numero"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Nenhum registro encontrado.</td></tr>";
                }
                $conn->close();
            ?>
            </tbody>
        </table>
        <a href="index.php">Inserir novo cadastro</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-4EK4gFLnMmP65fTuPXBtS+7t3q3t2XhCxu1eNiqss7VYTKbTJSN7V/ahbclGwnsV" crossorigin="anonymous"></script>
</body>
</html>