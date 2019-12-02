function cambiarMes(opcion){
	var d = new Date();
    var mes = d.getMonth() + 1;
    var anio = d.getFullYear();
	switch(opcion){
		case "-anio":
		anio--;
		break;
		case "-mes":
			if(mes == 1){
				anio --;
				mes = 12;
			}
			else
				mes--;
		break;
		case "+mes":
			if(mes == 12){
				anio ++;
				mes = 1;
			}
			else
				mes++;
		break;
		case "+anio":
		anio++
		break;
	}
	llamarGET('ajax.php',mes,anio);
}

function llamarGET(direccion,mes,anio){
	direccion += '?mes=' + mes + '&anio=' + anio;
	ajax=new XMLHttpRequest();
	ajax.onreadystatechange=function(){
		if(ajax.readyState == 4) { 
		 	if(ajax.status == 200){
		 	 document.getElementById('contenido').innerHTML=ajax.responseText;
		 	}
		}
	}
	ajax.open('GET', direccion, true); 
	ajax.send(); 
}