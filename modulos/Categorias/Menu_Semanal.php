<div class="container text-center mt-5" id="iContainer">
    <div id="pageback">
        <a href="" onclick="Inicio();" class="btn back-btn">
            <img src="imgs/back.png" alt="Back" style="max-width: 100%; max-height: 100%;">
            <h5>Atrás</h5>
        </a>
        <h4 id="bienvenido">¡Bienvenido al servicio de cafetería TuCloché!</h4> 
    </div>  
</div>
<br>
<div class="container border-top border-5" id="cContainer"></div><br>
<h4>Menú del día:</h4>
<br>
<div class="container border-bottom border-5" id="cContainer"></div><br>
<div class="row">
  <div class="col-md-4">
  <?php
      include '../../appCode/clsProductos.php';   
        
      $productos = new Productos();
      $result = $productos->getMenuSemanal();
        
      foreach($result as $row)
      {
    ?>
    <img src="<?=$row["imagen"]?>" alt="Pollo a la Naranja" class="img-fluid">
  </div>
  <div class="col-md-8">
    <h1><strong>Lunes:</strong></h1>
    <h4><?=$row["nombre_productos"]?></h4>
    <h5><?=$row["descripcion_productos"]?></h5>
    <br>
    <div class="d-flex justify-content-between align-items-center">
        <div style="font-size: 35px;">$<?=$row["precio_productos"]?></div>
        <button class="btn btn-sm" style="width: 50px; height: 50px;">
            <img src="imgs/Agregar.png" alt="Agregar al carrito" style="max-width: 150%; max-height: 150%;">
        </button>
    </div>
    <?php       
      }
    ?>
  </div>
</div>
