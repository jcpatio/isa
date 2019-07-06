<?php
//////////////////////////////////////||
//  Informació del sistema            ||
//  JUAN CARLOS PATIÑO                ||
//  @jcpatio                          ||
//  https://github.com/jcpatio        ||
//////////////////////////////////////||

function mensajeErrores($nMensaje){
    global $con;
    
    if(isset($nMensaje)){   
     $qMensaje = "SELECT * FROM  mensajes_error where  mensaje_id='$nMensaje'";									
     $rMensaje = mysqli_query($con, $qMensaje) or die(mysqli_error());
     $rowMensaje = mysqli_fetch_assoc($rMensaje);

    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
           '.$rowMensaje['mensaje'].'
          </div>';
    }
}
?>