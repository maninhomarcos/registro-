<?php 

$servername = "localhost";
$username = "id20532918_amkehbf";
$password = "vo/c<dSVlW!?1>yl";
$db = "id20532918_marcosreikwebfklwe";


$conn = new mysqli($servername,$username, $password,$db);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Conectado com sucesso";
?>