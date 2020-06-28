<?php

include ("baseDatos.php"); 

if(isset($_POST["buscarReg"]))
{
    $nombre= $_POST["nombreBuscar"];

// 1. Crea una consulta para buscar datos en SQL.

$consulta= "SELECT nombre, correo, password FROM usuarios WHERE nombre='$nombre'";

// 2. Crea un objeto instanciado de la clase baseDatos.
$opBuscar= new baseDatos ();

// 3. Usa el método de BaseDatos que permite buscar/leer en SQL.
$resultado=$opBuscar->consultarEnBaseDatos($consulta);

// 4. A diferencia de agregarDatos.php, este punto demás imprime el resultado.
echo("<br>");
print_r(json_encode($resultado));
}

else{
    echo("Usted no debería estar acá");
}


?>