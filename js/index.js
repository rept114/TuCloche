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
    $.post("modulos/Carrito/ModalMatricula.php", {id: paramId})
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

/*
    Esta funcion guarda los datos de la tarjeta
    Si el paramId = 0 es un insert o nueva tarjeta
    Si el paramId > 0 es un update
*/
function saveCliente(paramId){     
    /*Obtiene los valores capturados en los inputs*/
    paramNombre = $("#txtNombre").val();
    paramRfc = $("#txtRfc").val();
    paramTelefono = $("#txtTelefono").val();

    /* Validaciones de contenido*/
    if (paramNombre == "" || paramRfc == "" || paramTelefono == ""){
        /*Algun input esta vacio*/
        swal.fire('Error!','Algunos datos estan vacios','error');
    }
    else{
        /*Envia los valores al guardar*/
        $.post("modulos/clientes/saveCliente.php", 
        {
            id: paramId,
            nombre: paramNombre,
            rfc: paramRfc,
            telefono: paramTelefono,               
        })
        .done(function(data) 
        {   
            if (data == "Éxito"){
                Swal.fire('Buen trabajo!', 'Se registró un nuevo cliente', 'success');                    
                getCliente();            
            }
            else{
                Swal.fire('Error!', 'Los datos no se guardaron, verifique su conexion a internet', 'error');                    
                getCliente();
            }
        });  
    }
    
}