<?php
   $conexion = mysqli_connect('localhost', 'root', '', 'fastjobs') or die(mysql_error($mysqli));

   insertar_inicio($conexion);
   function insertar_inicio($conexion){
       
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
   
   $consulta = "INSERT INTO inicio(usuario, contraseña)
   VALUES ('$usuario', '$contraseña')";
   
   mysqli_query($conexion, $consulta);
   mysqli_close($conexion);
   }
   header("Location:user-login.html");
   die();
   
?>
