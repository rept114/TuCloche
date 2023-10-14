$( document ).ready( function() {
    /*Oculta el gif loading*/
    $(".jm-loadingpage").fadeOut("slow");

    $(".carrito-btn").click(function(event) {
        event.preventDefault(); // Esto evitará que el enlace siga el href="#"
        Carrito(); // Llama a la función Carrito
    });
} )

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
