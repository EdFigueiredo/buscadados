<?php
$servidor="localhost";
$usuario ='root';
$senha = "";
$dbname = "vendas";

$conecta = mysqli_connect($servidor, $usuario, $senha, $dbname);


$busca = $_POST['busca'];
$result_cursos = "SELECT * FROM cursos WHERE nome LIKE '%$busca%' LIMIT 5";
$resultado_cursos = mysqli_query($conecta, $result_cursos);

while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
    echo "Nome do curso: ".$rows_cursos['nome']."<br>";
}
?>