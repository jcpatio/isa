<?php
//////////////////////////////////////||
//  Informació del sistema            ||
//  JUAN CARLOS PATIÑO                ||
//  @jcpatio                          ||
//  https://github.com/jcpatio        ||
//////////////////////////////////////||

function tipoUsuario($tipoUsuario){
global $con;
    
    $qTipoUsuario = "SELECT url FROM tipo_usuarios WHERE tipo_usuario_id = '$tipoUsuario'";
    $rTipoUsuario = $con->query( $qTipoUsuario );
    $rowTipoUsuario = $rTipoUsuario->fetch_assoc();
    
    return $rowTipoUsuario[ 'url' ];

}

function registrarInicioSesion($usuarioId, $ip){
global $con;
    
    ///eliminamos las demas sesiones
	$qSesionUpdate = "UPDATE sesiones SET activo='0'  WHERE usuario_id='$usuarioId'";
	mysqli_query($con,$qSesionUpdate) or die(mysqli_error());
    
    
    
    $codigo=tokenUsuario();
    date_default_timezone_set( 'America/Bogota' );
    $fechar = date( "Y-m-d H:i:s" );
    
    $token = $usuarioId.$codigo;
    
    $qSesion = "INSERT INTO sesiones (token,usuario_id, actividad, fechar, ip) VALUES('$token','$usuarioId', 'Inicio Sesion','$fechar', '$ip')";
    mysqli_query( $con, $qSesion )or die( mysqli_error() );
    
    
    return $token;

}


function registrarSalirSesion($usuarioId, $ip){
global $con;
    
    ///eliminamos las demas sesiones
	$qSesionUpdate = "UPDATE sesiones SET activo='0'  WHERE usuario_id='$usuarioId'";
	mysqli_query($con,$qSesionUpdate) or die(mysqli_error());
    
    
    
    $codigo=tokenUsuario();
    date_default_timezone_set( 'America/Bogota' );
    $fechar = date( "Y-m-d H:i:s" );
    
    $token = $usuarioId.$codigo;
    
    $qSesion = "INSERT INTO sesiones (token,usuario_id, actividad, fechar, ip, activo) VALUES('$token','$usuarioId', 'Salir Sesion','$fechar', '$ip', 0)";
    mysqli_query( $con, $qSesion )or die( mysqli_error() );
    
    
    return $token;

}

function tokenUsuario() {
			$i = 0;
			$password = "";
			$pw_largo = 20;
			$desde_ascii = 50;
			$hasta_ascii = 122;
			$no_usar = array( 58, 59, 60, 61, 62, 63, 64, 73, 79, 91, 92, 93, 94, 95, 96, 108, 111 );
			while ( $i < $pw_largo ) {
				mt_srand( ( double )microtime() * 1000000 );
				$numero_aleat = mt_rand( $desde_ascii, $hasta_ascii );
				if ( !in_array( $numero_aleat, $no_usar ) ) {
					$password = $password . chr( $numero_aleat );
					$i++;
				}
			}
			return $password;

}


function consultarDepartamento($departamentoId){
    
    global $con;

    $qDepartamento = "SELECT * FROM  departamentos where  departamento_id='$departamentoId'";									
    $rDepartamento = mysqli_query($con, $qDepartamento) or die(mysqli_error());
    $rowDepartamento = mysqli_fetch_assoc($rDepartamento);

    return array(
         'nombreDepartamento'=> $rowDepartamento['nombre_departamento'],
    );
}

function consultarMunicipio($municipioId){
    
    global $con;
   
    $qMunicipio = "SELECT * FROM  municipios where  municipio_id='$municipioId'";									
    $rMunicipio = mysqli_query($con, $qMunicipio) or die(mysqli_error());
    $rowMunicipio = mysqli_fetch_assoc($rMunicipio);


    return array(
         'nombreMunicipio'=> $rowMunicipio['nombre_municipio'],   
    );
}

function consultarEstado($estadoId){
    
    global $con;
   
    $qEstado = "SELECT * FROM  estados_lideres where  estado_lider_id='$estadoId'";									
    $rEstado  = mysqli_query($con, $qEstado ) or die(mysqli_error());
    $rowEstado  = mysqli_fetch_assoc($rEstado );


    return array(
         'estado'=> $rowEstado['estado_lider'],   
         'color'=> $rowEstado['color'],   
    );
}

function consultarLiderSocial($liderSocialId){
    
    global $con;
   
    $qLider = "SELECT * FROM  lideres_sociales where  lider_social_id='$liderSocialId'";									
    $rLider = mysqli_query($con, $qLider ) or die(mysqli_error());
    $rowLider  = mysqli_fetch_assoc($rLider );


    return array(
         'nombres'=> $rowLider['nombres'],   
         'apellidos'=> $rowLider['apellidos'],   
    );
}
		

?>