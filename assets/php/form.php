<?php
$host = 'localhost';
$db = 'base_de_datos';
$user ='root';
$pass = '';


$conn = new mysqli($hos,$db,$user,$pass);
if ($conn->connect_error){
    die("La conexion a la pase de datos a fallado" .$conn->connect_error);
}

$nombre = $_POST["name"];
$apellido = $_POST["lastname"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$fecha = $_POST["date"];
$terminos = iseet($POST["terminos"]) ? 1 : 0; // Valor booleano
$contraseña = password_hash($_POST["pass"], PASSWORD_DEFAULT);


$sql_check = "SELECT * FROM usuarios WHERE nombre='$nombre'";
$result = $conn->query($sql_check);+



if ($result ->num_rows > 0){
    echo "El nombre de usuario '$nombre' ya existe";
}else {
    $sql_insert = "INSERT INTO usuarios (nombre,contraseña,email,tel,recidencia,fecha,archivo,opcion1,comentario,terminos) VALUES ('$nombre','$contraseña','$email','$tel','$recidencia','$fecha','$archivo','$opcion1','$comentario','$terminos')";
    
    IF($conn->query($sql_insert) == TRUE){
        echo "Usuario registrado con exito. ¡BIenvenido $nombre";
    }else{
        echo "Error al ingresar el usuario" .%conn->server;
    }
}

# conn.>close();
$conn->close();

?>
