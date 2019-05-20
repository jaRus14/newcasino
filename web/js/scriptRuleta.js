const ruleta = document.querySelector("#ruleta");

ruleta.addEventListener("click",girar);

dinero = 50;

function f1(){ 
    var m2='mensaje 2'
    console.log(m1)
    console.log(m2)
    m1='mensaje 1 cambiado' 

}


function girar(){
    if (dinero >= 20) {
    	let rand = Math.random()*7200; 
    	sumarPuntos(-20);
        calcular(rand);
    }  
    else {
    	alert("no te queda suficiente dinero");
    }
}
function sumarPuntos(p){
	dinero += p;
    document.querySelector("#dinero").innerHTML = "FICHAS: " + dinero + "FICHAS";

}

function myFunction() {
    document.getElementById("prueba").style.color = "yellow";

}



function calcular(rand){
    valor = rand / 360;
    valor = (valor - parseInt(valor.toString().split(".")[0])) * 360;
    ruleta.style.transform = "rotate("+ rand + "deg)";
    setTimeout(()=>{
    switch(true){
    	case valor > 0 && valor <= 9.5:
    	    alert("0");
    	    break;
    	case valor > 9.5 && valor <= 19:
    	    alert("26");
    	    sumarPuntos(20);
    	    break;
        case valor > 19 && valor <= 28.5:
            alert("3");
            sumarPuntos(55);
            break; 
        case valor > 28.5 && valor <= 38:
            alert("35");
            sumarPuntos(50);
            break;
        case valor > 38 && valor <= 47.5:
            alert("12");
            sumarPuntos(100);
            break;
        case valor > 47.5 && valor <= 57:
            alert("28");
            break;
        case valor > 57 && valor <= 66.5:
            alert("7");
            sumarPuntos(50);
            break;
        case valor > 66.5 && valor <= 76:
            alert("29");
            sumarPuntos(501);
            break;
        case valor > 76 && valor <= 85.5:
            alert("18");
            sumarPuntos(504);
            break;
        case valor > 85.5 && valor <= 95:
            alert("22");
            sumarPuntos(504);
            break;
        case valor > 95 && valor <= 104.5:
            alert("9");
            sumarPuntos(104);
            break;
        case valor > 104.5 && valor <= 114:
            alert("31");
            sumarPuntos(104);
            break;
        case valor > 114 && valor <= 123.5:
            alert("14");
            sumarPuntos(104);
            break;
        case valor > 123.5 && valor <= 133:
            alert("20");
            sumarPuntos(105);
            break;
        case valor > 133 && valor <= 142.5:
            alert("1");
            sumarPuntos(105);
            break;
        case valor > 142.5 && valor <= 152:
            alert("33");
            sumarPuntos(105);
            break;
        case valor > 152 && valor <= 161.5:
            alert("16");
            sumarPuntos(140);
            break;
        case valor > 161.5 && valor <= 171:
            alert("24");
            sumarPuntos(10);
            break;
        case valor > 171 && valor <= 180.5:
            alert("5");
            sumarPuntos(10);
            break;
        case valor > 180.5 && valor <= 190:
            alert("10");
            sumarPuntos(10);
            break;
        case valor > 190 && valor <= 199.5:
            alert("23");
            sumarPuntos(10);
            break;
        case valor > 199.5 && valor <= 209:
            alert("8");
            sumarPuntos(10);
            break;
        case valor > 209 && valor <= 219.5:
            alert("30");
            sumarPuntos(10);
            break;
        case valor > 219.5 && valor <= 229:
            alert("11");
            sumarPuntos(10);
            break;
        case valor > 229 && valor <= 238.5:
            alert("36");
            sumarPuntos(10);
            break;
        case valor > 238.5 && valor <= 248:
            alert("13");
            sumarPuntos(10);
            break;
        case valor > 248 && valor <= 257.5:
            alert("27");
            sumarPuntos(10);
            break;
        case valor > 257.5 && valor <= 267:
            alert("6");
            sumarPuntos(10);
            break;
        case valor > 267 && valor <= 276.5:
            alert("34");
            sumarPuntos(10);
            break;
        case valor > 276.5 && valor <= 286:
            alert("17");
            sumarPuntos(10);
            break;
        case valor > 286 && valor <= 295.5:
            alert("25");
            sumarPuntos(10);
            break;
        case valor > 295.5 && valor <= 305:
            alert("2");
            sumarPuntos(10);
            break;
        case valor > 305 && valor <= 314.5:
            alert("21");
            sumarPuntos(10);
            break;
        case valor > 314.5 && valor <= 324:
            alert("4");
            sumarPuntos(10);
            break;
        case valor > 324 && valor <= 333.5:
            alert("19");
            sumarPuntos(10);
            break;
        case valor > 333.5 && valor <= 343:
            alert("15");
            sumarPuntos(10);
            break;
        case valor > 343 && valor <= 352.5:
            alert("32");
            sumarPuntos(10);
            break;
        
    }},5000);
}