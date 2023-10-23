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

<div class="container">
    <h4>Desayunos:</h4>
    <div class="row row-cols-12 row-cols-md-3 g-4">
        <?php
        include '../../appCode/clsProductos.php';   
        
        $productos = new Productos();
        $result = $productos->getDesayunosProductos();
        
        foreach($result as $row)
        {
        ?>
        <div class="col">
            <div class="card h-100">
                <img src="<?=$row["imagen"]?>" class="card-img-top custom-image" alt="Huevos" style="max-width: 100%; max-height: 100%;">
                <div class="card-body">
                    <h5 class="card-title"><?=$row["nombre_productos"]?></h5>
                    <p class="card-text"><?=$row["descripcion_productos"]?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="font-size: 22px;">$<?=$row["precio_productos"]?></div>
                        <button class="btn btn-sm" style="width: 50px; height: 50px;">
                            <img src="imgs/Agregar.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php       
        }
        ?>
    </div>
</div>
