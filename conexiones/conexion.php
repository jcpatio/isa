<?php
header('Access-Control-Allow-Origin: *');

function conectar() {

	$user = "root";
	$pass = "netdova2";
	$server = "localhost";
	$db = "isa";
	$con = mysqli_connect( $server, $user, $pass, $db )or die( 'Ha fallado la conexion: ' . mysqli_error( $con ) );
	mysqli_set_charset( $con, "utf8" );


	return $con;
}





?>