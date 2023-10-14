<div class="container text-center mt-5" id="iContainer">
    <div id="pageback">
        <a href="index.php" class="btn back-btn">
            <img src="imgs/back.png" alt="Back" style="max-width: 100%; max-height: 100%;">
            <h5>Atrás</h5>
        </a>
        <h4 id="bienvenido">¡Bienvenido al servicio de cafetería TuCloché!</h4> 
    </div>  
</div>
<br>
<div class="container border-top border-5" id="cContainer"></div><br><br>
<h1>Cards / Busquedas</h1>
<div class="container">
    <div class="row">
        <div class="col-10">
            <input type="text" name="txtBuscar" id="txtBuscar" class="form-control" placeholder="Capture descripción o código">
        </div>
        <div class="col-2">
            <button class="btn btn-danger" onclick="hacerBusqueda();">Buscar</button>
        </div>
    </div>
    <div class="row" id="dvResultadoBuscar">

    </div>
</div>