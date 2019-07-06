<?php
require('../conexiones/conexion.php');
$con=conectar();	
require('consultas.php');
	session_start();
	
	if(isset($_SESSION["usuario_id"])){
		header("Location: ../index.php");
	}
	
	if(!empty($_POST))
	{
		$usuario = mysqli_real_escape_string($con,$_POST['usuario']);
		$claveUsuario = mysqli_real_escape_string($con,$_POST['claveUsuario']);
		$error = '';
		
		$sha1Pass = sha1($claveUsuario);
		
		$sql = "SELECT usuario_id, usuario,tipo_usuario_id, activo FROM usuarios WHERE usuario = '$usuario' AND clave = '$sha1Pass'";
		$result=$con->query($sql);
		$rows = $result->num_rows;
        
    
		if($rows > 0) {
			$row = $result->fetch_assoc();
            ////validamos si el usuario esta activo
            if( $row['activo']==1 ){
                $_SESSION['usuarioId'] = $row['usuario_id'];
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['tipoUsuario'] = $row['tipo_usuario_id'];
                
                $ruta = tipoUsuario($row['tipo_usuario_id']);
                $ip=$_SERVER['REMOTE_ADDR'];
                ///registramos el inicio de sesion
                
                $_SESSION['token']= registrarInicioSesion($row['usuario_id'],$ip);
                
                header("Location:../".$ruta);
                
            }
            ///el usuario esta inhabilitado
            else{
                header("Location: ../index.php?msg=3");
            }
           
        } 
        else {
			header("Location: ../index.php?msg=1");
		}
	}
///si el usuario intenta acceder de manera directa sin loguearse lo vamos a enviar al login
    else{
        header("Location: ../index.php?msg=2");
    }

?>