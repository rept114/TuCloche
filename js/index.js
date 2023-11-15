$(document).ready(function() {
    $(".jm-loadingpage").fadeOut("slow");

    if ($(".carrito-btn").length) {
        $(".carrito-btn").click(function(event) {
            event.preventDefault();
            Carrito();
        });
    }
});

function Desayunos(){
    $.post("modulos/Categorias/Desayunos.php", {})
    .done(function(data)
    {
        $("#dvContainer").html("");
        $("#dvContainer").html(data);
    });
}

function Menu_Semanal(){
    $.post("modulos/Categorias/Menu_Semanal.php", {})
    .done(function(data)
    {
        $("#dvContainer").html("");
        $("#dvContainer").html(data);
    });
}

function Comidas(){
    $.post("modulos/Categorias/Comidas.php", {})
    .done(function(data)
    {
        $("#dvContainer").html("");
        $("#dvContainer").html(data);
    });
}

function Bebidas(){
    $.post("modulos/Categorias/Bebidas.php", {})
    .done(function(data)
    {
        $("#dvContainer").html("");
        $("#dvContainer").html(data);
    });
}

function Snacks(){
    $.post("modulos/Categorias/Snacks.php", {})
    .done(function(data)
    {
        $("#dvContainer").html("");
        $("#dvContainer").html(data);
    });
}

function Carrito(){
    $.post("modulos/Carrito/Productos.php", {})
    .done(function(data)
    {
        $("#dvContainer").html("");
        $("#dvContainer").html(data);
    });
}

/*
    Esta funcion abre el formulario para alta o edicion de clientes
    si el paramId = 0 es una alta
    si el paramId > 0 es una Modificacion
*/
function ModalTarjeta(){
    $.post("modulos/Carrito/ModalTarjeta.php", {})
    .done(function(data)
    {
        $("#exampleModal").html("");
        $("#exampleModal").html(data);
    });
}

function ModalMatricula(){
    $.post("modulos/Carrito/ModalMatricula.php", {})
    .done(function(data)
    {
        $("#exampleModal").html("");
        $("#exampleModal").html(data);
    });
}

function Ppago(){
    $.post("modulos/Carrito/pago.php", {})
    .done(function(data)
    {
        $("#dvContainer").html("");
        $("#dvContainer").html(data);
    })
}

function Inicio(){
    $.post("modulos/Inicio/Index.php", {})
    .done(function(data)
    {
        $("#dvContainer").html("");
        $("#dvContainer").html(data);
    })
}


function ModalPagoExitoso(){
    $.post("modulos/Inicio/Index.php", {})
    .done(function(data)
    {
        $("#dvContainer").html("");
        $("#dvContainer").html(data);

        // Mostrar el modal
        $("#pagoModal").css("display", "block");
    })
}

//buscamos por la matricula el nombre
function buscarNombre() {
    var matricula = $("#matricula").val();
    
    $.post("modulos/carrito/searchNombre.php", { matricula: matricula })
    .done(function(data) {

        $("#nombre").val(data);
    })
    .fail(function() {
        $("#nombre").text("Error al buscar el nombre.");
    });
}

/*Guardar tarjeta*/
function saveCliente(paramId){     
    /* Obtiene los valores capturados en los inputs */
    var paramNombre = $("#nombre_completo").val();
    var paramTarjeta = $("#numero_tarjeta").val();
    var paramVencimiento = $("#vencimiento").val();
    var paramCodigoS = $("#codigo_seguridad").val();

    /* Validaciones de contenido */
    if (paramNombre == "" || paramTarjeta == "" || paramVencimiento == "" || paramCodigoS == ""){
        /* Algun input está vacío */
        swal.fire('Error!','Algunos datos están vacíos','error');
    }
    else{
        /* Envia los valores al guardar */
        $.post("modulos/carrito/saveTarjeta.php", 
        {
            nombre_completo: paramNombre,
            numero_tarjeta: paramTarjeta,
            vencimiento: paramVencimiento,    
            codigo_seguridad: paramCodigoS,           
        })
        .done(function(data) 
        {   
            if (data == "Éxito"){
                Swal.fire('Buen trabajo!', 'Se hizo el pago con éxito!', 'success');                    
                /* Si deseas actualizar la vista después de guardar, llama a la función correspondiente aquí */
                ModalMatricula();
            }
            else{
                Swal.fire('Error!', 'Los datos no se guardaron, verifique su conexión a internet', 'error');                    
            }
        })
        .fail(function() {
            Swal.fire('Error!', 'Ocurrió un error al realizar la solicitud', 'error');
        });  
    }
}


// sirve para delimitar la escritura en los input date

function formatFecha(event) {
    let input = event.target;
    let value = input.value.replace(/\D/g, ''); // Elimina caracteres no numéricos
    if (value.length > 2) {
        value = value.slice(0, 2) + '/' + value.slice(2); // Inserta la barra
    }
    input.value = value;
}

document.addEventListener('DOMContentLoaded', function() {
    let vencimientoInput = document.getElementById('vencimiento');
    if (vencimientoInput) {
        vencimientoInput.addEventListener('input', formatFecha);
    }
});

//tarjeta numeros
function formatTarjeta(event) {
    let input = event.target;
    let value = input.value.replace(/\D/g, ''); // Elimina caracteres no numéricos
    value = value.replace(/(\d{4})(?=\d)/g, '$1-'); // Inserta guiones cada 4 dígitos
    input.value = value;
}

document.addEventListener('DOMContentLoaded', function() {
    let tarjetaInput = document.getElementById('numero_tarjeta');
    if (tarjetaInput) {
        tarjetaInput.addEventListener('input', formatTarjeta);
    }
});

//Limitamos a los numeros solamente
function formatCodigo(event) {
    let input = event.target;
    let value = input.value.replace(/\D/g, ''); // Elimina caracteres no numéricos
    input.value = value;
}

document.addEventListener('DOMContentLoaded', function() {
    let codigoInput = document.getElementById('codigo_seguridad');
    if (codigoInput) {
        codigoInput.addEventListener('input', formatCodigo);
    }
});

//agregar al carrito
function insertarEnBaseDeDatos(index) {
    /* Obtiene los valores capturados en los div */
    var paramNombre = $("#nombreProducto" + index).html();
    var paramPrecio = $("#precioProducto" + index).html().replace('$', '');
    
    
    
    /* Validaciones de contenido */
    if (paramNombre == "" || paramPrecio == ""){
        /* Algun input está vacío */
        swal.fire('Error!','Algunos datos están vacíos','error');
    }
    else{
        /* Envia los valores al servidor */
        $.post("modulos/Carrito/insertProductospPedir.php", 
        {
            producto: paramNombre,
            precio: paramPrecio          
        })
        .done(function(data) {   
            if (data.trim() == "Éxito") { // Asegúrate de que la comparación sea estricta (===)
                Swal.fire('Buen trabajo!', 'Se hizo el pago con éxito!', 'success');
                // Si deseas actualizar la vista después de guardar, llama a la función correspondiente aquí
            } else {
                Swal.fire('Error!', 'Los datos no se guardaron, verifique su conexión a internet', 'error');
            }
        })
        .fail(function() {
            Swal.fire('Error!', 'Ocurrió un error al realizar la solicitud', 'error');
        });
        
    }
}





