<?php

include ("baseDatos.php"); //<-- Se incluye el archivo donde está escrita la baseDatos para poder usar dentro de este componente.

if(isset($_POST["btnEnviar"])) //<-- valida si se preciocó el botón de envío.
{
    //Recibe los datos del formulario en variables independientes.
    $nombre= $_POST["nombre_usuario"]; 
    $correo=$_POST["InputEmail"];
    $contrasena=$_POST["InputPassword"];


// 1. Crear una consulta de SQL para agregar datos.
$consulta= "INSERT INTO usuarios(nombre, correo, password) VALUES ('$nombre','$correo','$contrasena')";

// 2. Crear un objeto de la clase Base Datos.
$opBaseDatos= new baseDatos ();

// 3. Método para leer datos en la base de datos (buscar).
$opBaseDatos ->alterarBaseDatos($consulta);

}

else{
    echo("Usted no debería estar acá");
}


?>