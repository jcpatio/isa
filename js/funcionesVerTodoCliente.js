// JavaScript Document

	$( document ).ready(function() {	
        $('#tipoMoneda').change( function (){
           cambioMoneda();
        });
    });

	function deshabilitarCliente( clienteId ) {
		var clienteId = clienteId;

		document.location = 'cambiarDeEstadoClienteDeshabilitado.php?clienteId=' + clienteId + '&&&';
		return true;

	}
	

	function habilitarCliente( clienteId ) {
		var clienteId = clienteId;

		document.location = 'cambiarDeEstadoClienteHabilitado.php?clienteId=' + clienteId + '&&&';
		return true;


	}

	function habilitarCliente( clienteId ) {
		var clienteId = clienteId;

		document.location = 'cambiarDeEstadoClienteHabilitado.php?clienteId=' + clienteId + '&&&';
		return true;


	}

	function deshabilitarFacturacion( clienteId ) {
		var clienteId = clienteId;

		document.location = 'cambiarDeEstadoFacturacionDeshabilitado.php?clienteId=' + clienteId + '&&&';
		return true;


	}


	function habilitarFacturacion( clienteId ) {
		var clienteId = clienteId;

		document.location = 'cambiarDeEstadoFacturacionHabilitado.php?clienteId=' + clienteId + '&&&';
		return true;


	}

	function editarCliente( clienteId ) {
		var clienteId = clienteId;

		document.location = 'editarCliente.php?clienteId=' + clienteId + '&&&';
		return true;


	}

	function editarEquipoCliente( equipoId ) {
		var clienteId = $( '#clienteId' ).val();

		document.location = 'editarEquipoCliente.php?equipoId=' + equipoId + '&&clienteId=' + clienteId;
		return true;


	}

	function retirarEquipoCliente( equipoId ) {
		var clienteId = $( '#clienteId' ).val();
		var equipoId = $( '#equipoId' ).val();
		var idUser = $( '#idUser' ).val();

		document.location = 'retirarEquipo.php?equipoId=' + equipoId + '&&clienteId=' + clienteId + '&&idUser=' + idUser;
		return true;


	}
	
	function generarDeuda( clienteId ) {
		var clienteId = $( '#clienteId' ).val();
		var idUser = $( '#idUser' ).val();

		document.location = 'generarDeudaMensualidad.php?clienteId=' + clienteId +  '&&idUser=' + idUser;
		return true;


	}

	function generarFactura( clienteId ) {
		var clienteId = clienteId;
		var mesPeriodoFacturar = document.getElementById( "mesPeriodoFacturar" ).value;
		var anoPeriodoFacturar = document.getElementById( "anoPeriodoFacturar" ).value;

		if ( mesPeriodoFacturar == 0 ) {
			alert( 'El Mes Esta Vacio' );

		}
		if ( anoPeriodoFacturar == 0 ) {
			alert( 'El año Esta Vacio' );
		} else {
			document.location = 'generarFacturaCliente.php?clienteId=' + clienteId + '&mes=' + mesPeriodoFacturar + '&ano=' + anoPeriodoFacturar;
			return true;
		}




	}
	
	function asignarServicio(){
		$('#error').click();
	}
	
	
	function eliminarReciboPago(reciboPagoId){
		$('#alertEliminarReciboPago').click();
		$('#reciboPagoId').val(reciboPagoId);
	}
	
    
    
	function cambioMoneda(){
		$('#alertCambioMoneda').click();
	}
    
    
	function eliminarFactura(facturaId){
		$('#alertEliminarFactura').click();
        $('#facturaIdEliminar').val(facturaId);
	}
    
	function cambiarMonedaCliente(clienteId){
	  var tipoMonedaId = $("#tipoMoneda option:selected").val();	
        
        document.location = 'cambiarTipoMonedaCliente.php?clienteId=' + clienteId + '&tipoMoneda=' + tipoMonedaId;
        return true;	
        
	}
	
	function asignacionServicio(clienteId){
		var tipoServicio = $('#tipoServicio').val();
		if(tipoServicio==1){			
			document.location = 'agregarServicioClienteNuevo.php?clienteId=' + clienteId ;
			return true;			
		}
		if(tipoServicio==2){
			document.location = 'agregarServicioClienteOtro.php?clienteId=' + clienteId ;
			return true;	
		}
	}
	
	function eliminarSolicitudServicio(relacionServicioId,servicioId){
		$('#eliminarServ').click();
		$('#relacionServicioIdForm').val(relacionServicioId);
		$('#servicioIdForm').val(servicioId);
		
	}
	
	function eliminarServicioConfirmado(clienteId){
		
		var relacionServicioId = $('#relacionServicioIdForm').val();
		var servicioId = $('#servicioIdForm').val();
		var idUser = $( '#idUser' ).val();
		
		document.location = 'eliminarServicioClienteConfirmado.php?relacionServicioId=' + relacionServicioId +  '&&servicioId=' + servicioId + '&&clienteId=' + clienteId + '&&idUser=' + idUser;
		return true;
		
	}
	
	function deshabilitarServicio(relacionServicioId){
		$('#mensajeDeshabilitarServicio').click();
		$('#relacionServicioIdFormDes').val(relacionServicioId);
		
	}
	
	function retirarEquipoServicio(relacionServicioId){
		$('#mensajeRetirarEquipoServicio').click();
		$('#relacionRelacionServicioIdIdFormRetirarEquipo').val(relacionServicioId);
		
	}
	
	
	function cambiarServicio(relacionServicioId,clienteId){
		$('#mensajeCambiarServicio').click();
		$('#relacionServicioIdCambioServicio').val(relacionServicioId);
		
	}
	
	function cambiarEquipoConfirmado(clienteId){		
		var relacionServicioIdCambioServicio = $( '#relacionServicioIdCambioServicio' ).val();
		
		document.location = 'cambiarServicioCliente.php?clienteId=' + clienteId + '&&relacionServicioId=' + relacionServicioIdCambioServicio;
		return true;
		
	}
	
	
	function deshabilitarServicioConfirmado(clienteId){
		var relacionServicioId = $('#relacionServicioIdFormDes').val();
		var idUser = $( '#idUser' ).val();
		
		document.location = 'deshabilitarServicioClienteConfirmado.php?relacionServicioId=' + relacionServicioId + '&&clienteId=' + clienteId + '&&idUser=' + idUser;
		return true;
		
	}
	
	function habilitarServicioCliente(relacionServicioId){
		$('#mensajehabilitarServicio').click();
		$('#relacionServicioIdFormHab').val(relacionServicioId);
		
	}
	
	function habilitarServicioConfirmado(clienteId){
		var relacionServicioId = $('#relacionServicioIdFormHab').val();
		var idUser = $( '#idUser' ).val();
		
		document.location = 'habilitarServicioClienteConfirmado.php?relacionServicioId=' + relacionServicioId + '&&clienteId=' + clienteId + '&&idUser=' + idUser;
		return true;
		
	}
	
	function retirarEquipo(clienteId){		
		var idUser = $( '#idUser' ).val();
		
		document.location = 'retirarEquipoClienteConfirmado.php?clienteId=' + clienteId + '&&idUser=' + idUser;
		return true;
		
	}
	
	function retirarEquipoServicioConfirmado(clienteId){		
		var idUser = $( '#idUser' ).val();
		var relacionServicioId = $( '#relacionRelacionServicioIdIdFormRetirarEquipo' ).val();
		
		
		document.location = 'retirarEquipoServicioConfirmado.php?clienteId=' + clienteId + '&&idUser=' + idUser + '&&relacionServicioId=' + relacionServicioId ;
		return true;
		
	}
	
	
	
	function deshabilitarGeneracionDeuda(clienteId){		
		var idUser = $( '#idUser' ).val();
		
		document.location = 'deshabilitarGenerarDeuda.php?clienteId=' + clienteId + '&&idUser=' + idUser;
		return true;
		
	}
	
	
	function habilitarGeneracionDeuda(clienteId){		
		var idUser = $( '#idUser' ).val();
		
		document.location = 'habilitarGenerarDeuda.php?clienteId=' + clienteId + '&&idUser=' + idUser;
		return true;
		
	}
	
	function eliminarReciboPagoConfirmar(clienteId){		
		var idUser = $( '#idUser' ).val();
		var reciboPagoId = $( '#reciboPagoId' ).val();
        var clave = $( '#clave' ).val();
		
		document.location = 'eliminarReciboPago.php?reciboPagoId=' + reciboPagoId + '&&clienteId=' + clienteId + '&&idUser=' + idUser + '&&clave=' +clave;
		return true;
		
	}
	
	function eliminarFacturaConfirmado(clienteId){		
		var idUser = $( '#idUser' ).val();
		var facturaIdEliminar = $( '#facturaIdEliminar' ).val();
		
		
		document.location = 'eliminarFacturaGenerada.php?facturaId=' + facturaIdEliminar + '&&clienteId=' + clienteId + '&&idUser=' + idUser;
		return true;
		
	}