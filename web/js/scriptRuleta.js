const ruleta = document.querySelector("#ruleta");

ruleta.addEventListener("click",girar);

fichas = 500;

function girar(){
    if (fichas >= 20) {
    	let rand = Math.random()*7200; 
    	sumarPuntos(-20);
        calcular(rand);
    }  
    else {
    	alert("No tienes fichas para jugar");
    }
}
function sumarPuntos(p){
	fichas += p;
    document.querySelector("#fichas").innerHTML = "Fichas: " + fichas + "€";
}


function calcular(rand){
    valor = rand / 360;
    valor = (valor - parseInt(valor.toString().split(".")[0])) * 360;
    ruleta.style.transform = "rotate("+rand+"deg)";
    setTimeout(()=>{
    switch(true){
    	case valor > 0 && valor <= 45:
    	    alert("Has ganado y te has llevado 500 fichas");
    	    break;
    	case valor > 45 && valor <= 90:
    	    alert("Has ganado 20 fichas");
    	    sumarPuntos(20);
    	    break;
        case valor > 90 && valor <= 135:
            alert("Has sumado 5 fichas");
            sumarPuntos(5);
            break; 
        case valor > 135 && valor <= 180:
            alert("Has sumado 50 fichas");
            sumarPuntos(50);
            break;
        case valor > 180 && valor <= 225:
            alert("Has sumado 100 fichas");
            sumarPuntos(100);
            break;
        case valor > 225 && valor <= 270:
            alert("No has sumado fichas");
            break;
        case valor > 270 && valor <= 315:
            alert("Has sumado 70 fichas");
            sumarPuntos(70);
            break;
        case valor > 315 && valor <= 360:
            alert("Has sumado 10 fichas");
            sumarPuntos(10);
            break;
    }},5000);
}