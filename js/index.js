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