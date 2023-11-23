function quitarEspacios(event){
    if (event.keyCode == 32) {
        event.preventDefault();
    }
}

function verificarContras(){
    var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;
    var alert = document.getElementById("passdifferent");
    
    if (pass != cpass) {
        alert.style.display = "flex";
    } else {
        alert.style.display = "none";
    }
}


function main(){

}
 
window.onload = init;
main();