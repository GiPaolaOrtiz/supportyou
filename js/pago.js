document.getElementById("paypal").checked=false;
document.getElementById("other").checked=false;
function pagar(){
    alert("Gracias por su compra")
}

function seleccion(){
    if(document.getElementById("paypal").checked==true){
    document.getElementById("eleccion").innerHTML="PAYPAL";
    document.getElementById("other").checked=false;
    document.getElementById("paypal").checked=false;
}
else if(document.getElementById("other").checked==true){
    document.getElementById("eleccion").innerHTML="OTHERS";
    document.getElementById("paypal").checked=false;
    document.getElementById("other").checked=false;
}
}