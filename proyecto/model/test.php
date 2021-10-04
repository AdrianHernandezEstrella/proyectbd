<?php
// Realizar Conexion a BD
include ('conexion.php');
// Realizar consulta SQL
echo 'Funcionamiento de la aplicación';
echo ('<br>');
$consulta = "select * from visitas";

echo ($consulta);
echo ('<br>');
$resultado = mysqli_query($mysqli, $consulta);
if (!$resultado) {
    echo 'No seleciono BD';
    exit;
} else {

    echo 'Conexión exitosa a la BD';
}

echo ('<br>');
echo ('Primer recorrido');
// Imprimir Resultados
while ($filasql = mysqli_fetch_array($resultado)) {
    echo '<br>';
    
    echo $filasql[0] . ' ';
    echo $filasql[1] . ' ';
    echo $filasql[2] . ' ';
    echo '-';
    echo $filasql['nombre'] . ' ';
    echo $filasql['edad'] . ' ';
    echo $filasql['ciudad'] . ' ';
}
mysqli_close($mysqli);
?>