
window.addEventListener("load",function(){
	document.formulario1.addEventListener("submit",validarRegistro);
    document.formulario2.addEventListener("submit",validarAcceso);

});	

//Para rescatar valores
var nombre = document.getElementById("nombre");
var correo = document.getElementById("correo");
var contraseña = document.getElementById("contraseña");
var telefono = document.getElementById("telefono");
var ciudad = document.getElementById("ciudad");
var codigoPostal = document.getElementById("codigoPostal");


function validarRegistro(e){

    e = e || window.event;
    e.preventDefault();

    //Validación del nombre 
    const patronTexto = /^[a-zA-Z][A-Za-z áéúíó ñ]{3,}/;

    if (patronTexto.test(nombre.value)) { 
        $('#nombre').removeClass(' bg-danger-subtle');
    } else {
        $('#nombre').addClass(' bg-danger-subtle');  
    }

    //Validación correo
    const patronCorreo =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/ ;

    if (patronCorreo.test(correo.value)) {
        $('#correo').removeClass(' bg-danger-subtle');
    } else {
        $('#correo').addClass(' bg-danger-subtle'); 
    }

    //Validación teléfono
    const patronTelefono = /^[9|6|7][0-9]{8}$/;
    
    if (patronTelefono.test(telefono.value)) {
        $('#telefono').removeClass(' bg-danger-subtle');
    } else {
        $('#telefono').addClass(' bg-danger-subtle'); 
    }

    //Validación ciudad
    if (patronTexto.test(ciudad.value)) {
        $('#ciudad').removeClass(' bg-danger-subtle');
    } else {
        $('#ciudad').addClass(' bg-danger-subtle'); 
    }

    //Validación código postal
    const patronCodigoPostal = /^[0-9][0-9]{4}$/;
    if (patronCodigoPostal.test(codigoPostal.value)) {
        $('#codigoPostal').removeClass(' bg-danger-subtle');
    } else {
        $('#codigoPostal').addClass(' bg-danger-subtle'); 
    }
}
    
    
    
    



function validarAcceso(e){

    e = e || window.event;
    e.preventDefault();
    console.log("Acceder");

    //Validación correo
    const patronCorreo =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/ ;

    if (patronCorreo.test(correo.value)) {
        $('#correo').removeClass(' bg-danger-subtle');
    } else {
        $('#correo').addClass(' bg-danger-subtle'); 
    }
     
}

