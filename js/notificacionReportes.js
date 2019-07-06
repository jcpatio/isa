// JavaScript Documento
//// ing juan carlos patiño
//// 2018
/// jcpinversiones@gmail.com
//// el mundo es nuestro

$(document).ready(function() {
    function getRandValue(){
        value = $('#value').text();
        //var dataString = 'value='+value;

        $.ajax({
            type: "POST",
            url: "../../acciones/consultarTablaReportes.php",
            //data: dataString,
            success: function(data) {
							event.preventDefault();
							aviso = data.split(',');
							determinar=aviso[0];
							cliente=aviso[1];
							descripcion=aviso[2];
							fecha=aviso[3];
							if(determinar>0){
								 event.preventDefault();

								var options = {
									title: cliente,
									options: {
										body: descripcion,
										icon: '../../imagenesPrincipales/logos/iconoNotificaciones.png',
										//lang: 'es-Es'
									}
								};

								//console.log(options);
								$("#easyNotify").easyNotify(options);
							}else{
								
							}
               // $('#value').text(data);
							//alerta();
            }
        });
    }

    setInterval(getRandValue, 5000);
});