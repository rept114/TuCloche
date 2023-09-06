/*function holamundo()
{
    alert("Hola mundo")
}

function Suma(){
    //"getElementById" Se utiliza para acceder a un control del DOM
    n1=document.getElementById("txtn1").value;
    n2=document.getElementById("txtn2").value;
    Resultado = parseInt(n1) + parseInt(n2);
    document.getElementById("txtnRes").value = Resultado;
    alert("Tu suma es igual a: " + Resultado);
}

function Resta(){
    //"getElementById" Se utiliza para acceder a un control del DOM
    n1=document.getElementById("txtn1").value;
    n2=document.getElementById("txtn2").value;
    Resultado = parseInt(n1) - parseInt(n2);
    document.getElementById("txtnRes").value = Resultado;
    alert("Tu suma es igual a: " + Resultado);
}

function Suma2(){
    n1 = $("#txtn1").val();
    n2 = $("#txtn2").val();

    if(n1=="0" || n2=="0")
    {
        Swal.fire(
            "Error",
            "Debe capturar numeros mayores a 0",
            "error"
        );
    }
    else 
    {
        Resultado = parseInt(n1) + parseInt(n2)
        $("#txtnRes").val(Resultado);
    }
}
*/
function getClientes(){
    $.post("modulos/clientes/getClientes.php", {})
    .done(function(data)
    {
        $("#dvContainer").html("");
        $("#dvContainer").html(data);
    });
}

$(document).ready(function(){
    getClientes();
});
