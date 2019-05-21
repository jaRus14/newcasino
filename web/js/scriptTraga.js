var doing = false;

var val = document.getElementById("disponible").innerHTML;
var dinero = parseInt(val);
var ap = dinero;

var spin = [
			new Audio("../web/sonidos/spin.mp3"),
			new Audio("../web/sonidos/spin.mp3"),
			new Audio("../web/sonidos/spin.mp3"),
			new Audio("../web/sonidos/spin.mp3"),
			new Audio("../web/sonidos/spin.mp3"),
			new Audio("../web/sonidos/spin.mp3"),
			new Audio("../web/sonidos/spin.mp3")
			];

var coin = [
			new Audio("../web/sonidos/coin.mp3"),
			new Audio("../web/sonidos/coin.mp3"),
			new Audio("../web/sonidos/coin.mp3")
			]
var ganar = new Audio("../web/sonidos/ganar.mp3");
var perder = new Audio("../web/sonidos/perder.mp3");
let mensaje = document.getElementById("mensaje")


function sumarPuntos(p){
	dinero += p;
    document.querySelector("#disponible").innerHTML = "Fichas " + dinero;

}

function juego(){

	while(dinero > 0){

	if (doing){return null;}
	doing = true;
	var numeroCambios = randomInt(1,4)*7
	var numeroCaja1 = numeroCambios+randomInt(1,7)
	var numeroCaja2 = numeroCambios+2*7+randomInt(1,7)
	var numeroCaja3 = numeroCambios+4*7+randomInt(1,7)

	var i1 = 0;
	var i2 = 0;
	var i3 = 0;
	var sonido = 0
	mensaje.innerHTML = "SUERTE"
	caja1 = setInterval(girar1, 50);
	caja2 = setInterval(girar2, 50);
	caja3 = setInterval(girar3, 50);

	function girar1(){
		i1++;
		if (i1>=numeroCaja1){
			coin[0].play()
			clearInterval(caja1);
			return null;
		}
		cajaImagen = document.getElementById("caja1");
		if (cajaImagen.className=="a7"){
			cajaImagen.className = "a0";
		}
		cajaImagen.className = "a"+(parseInt(cajaImagen.className.substring(1))+1)
	}
	function girar2(){
		i2++;
		if (i2>=numeroCaja2){
			coin[1].play()
			clearInterval(caja2);
			return null;
		}
		cajaImagen = document.getElementById("caja2");
		if (cajaImagen.className=="a7"){
			cajaImagen.className = "a0";
		}
		cajaImagen.className = "a"+(parseInt(cajaImagen.className.substring(1))+1)
	}
	function girar3(){
		i3++;
		if (i3>=numeroCaja3){
			coin[2].play()
			clearInterval(caja3);
			compruebaGanador();
			return null;
		}
		cajaImagen = document.getElementById("caja3");
		if (cajaImagen.className=="a7"){
			cajaImagen.className = "a0";
		}
		sonido++;
		if (sonido==spin.length){
			sonido=0;
		}
		spin[sonido].play();
		cajaImagen.className = "a"+(parseInt(cajaImagen.className.substring(1))+1)
	}

}

alert(mensaje.innerHTML = "nlsadfslkdfsld");

}

function compruebaGanador(){
	var caja1 = document.getElementById("caja1").className
	var caja2 = document.getElementById("caja2").className
	var caja3 = document.getElementById("caja3").className

	var valor = document.getElementsByClassName("fichas")[0].value
	var apuesta = parseInt(valor)
	
	
	if (((caja1 == caja2 && caja2 == caja3) ||
		(caja1 == caja2 && caja3 == "a7") ||
		(caja1 == caja3 && caja2 == "a7") ||
		(caja2 == caja3 && caja1 == "a7") ||
		(caja1 == caja2 && caja1 == "a7") ||
		(caja1 == caja3 && caja1 == "a7") ||
		(caja2 == caja3 && caja2 == "a7") ) && !(caja1 == caja2 && caja2 == caja3 && caja1=="a7")){
		alert(mensaje.innerHTML = "HAS GANADO 100 FICHAS");
		sumarPuntos(100);
		ganar.play();
	}else{
		mensaje.innerHTML = "HAS PERDIDO";
		sumarPuntos(-apuesta)
		perder.play();
	}
	doing = false;
}


function randomInt(min, max){
	return Math.floor((Math.random() * (max-min+1)) + min);
}

