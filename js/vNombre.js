 function vNom(e,solicitar){
     // Admitir solo letras
		 tecla = (document.all) ? e.keyCode : e.which;
		 if (tecla==8) return true;
		 patron =/[\D\s]/;
		 te = String.fromCharCode(tecla);
		 if (!patron.test(te)) return true;
    // No admitir espacios iniciales
		 txt = solicitar.value;
		 if(txt.length==0 && te==' '){
		 alert('No se permiten espacios iniciales.');
		 return false;
		 }
    // Convertir 1° letra a mayuscula
		 if (txt.length==0 || txt.substr(txt.length-1,1)==' ') {
		 solicitar.value = txt+te.toUpperCase();
                 return false;
                 }
		 return true;
	         }
    // No admitir campo vacio
                 function vacio(){
	          var c_na = /^([a-z]|[A-Z]|Ã¡|Ã©|Ã*|Ã³|Ãº|Ã±|Ã¼|\s)+$/
                  if(!c_na.test(solicitar.nombre.value)){
                  alert('Escriba su nombre y apellido respetando mayúsculas, minúsculas y acentos.');
		 solicitar.nombre.focus();
                 return false;
                 }
                 return true;
                 }
                 
 