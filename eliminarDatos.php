<?php

include ("baseDatos.php"); 

if(isset($_POST["elimireg"]))
{
    $nombre= $_POST["nombreEliminar"];

// 1. Crea una consulta para Eliminar datos en SQL.

$consulta= "DELETE FROM usuarios WHERE nombre='$nombre'";

// 2. Crea un objeto instanciado de la clase baseDatos.
$opEliminar= new baseDatos ();

// 3. Usa el método de BaseDatos que permite eliminar en SQL.
$resultado=$opEliminar->alterarBaseDatos($consulta);

}

else{
    echo("Usted no debería estar acá");
}

?>