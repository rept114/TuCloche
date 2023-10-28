<div class="container text-center mt-5" id="iContainer"> 
    <h4>¡Bienvenido al servicio de cafetería TuCloché!</h4>             
</div>
<br></br>
<div class="container border-top border-5" id="cContainer">
    <br></br>
    <h2>Explorar por categoría:</h2>
    <div class="d-flex justify-content-between">
        <button class="btn btn-light" type="button" style="width: 350px;" onclick="Desayunos();">
            <h1>Desayunos</h1>
            <img src="imgs/DESAYUNO.png" class="ml-2" style="max-width: 50px; max-height: 50px;">
        </button>
        <button class="btn btn-light" type="button" style="width: 350px;" onclick="Comidas();">
            <h1>Comidas</h1>
            <img src="imgs/COMIDA.png" class="ml-2" style="max-width: 50px; max-height: 50px;">
        </button>
        <button class="btn btn-light" type="button" style="width: 350px;" onclick="Bebidas();">
            <h1>Bebidas</h1>
            <img src="imgs/Soda_2.png" class="ml-2" style="max-width: 50px; max-height: 50px;">
        </button>
    </div>
    <br></br>
    <div class="d-flex justify-content-between">
        <button class="btn btn-light" type="button" style="width: 350px;" onclick="Menu_Semanal();">
            <h3>Menú de la Semana</h3>
            <img src="imgs/MENU.png" class="ml-2" style="max-width: 50px; max-height: 50px;">
        </button>
        <button class="btn btn-light" type="button" style="width: 350px;" onclick="Snacks();">
            <h3>Snacks</h3>
            <img src="imgs/Snacks.png" class="ml-2" style="max-width: 50px; max-height: 50px;">
        </button>
    </div>
</div>
<br></br>
<div class="container border-top border-3" id="mnuGContainer">
<br><br> 
<h4>Menú General:</h4><br>
<div class="container">
    <h4>Desayunos:</h4>
    <div class="row row-cols-12 row-cols-md-3 g-4">
        <?php
        include 'appCode/clsProductos.php';   
        
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
</div><br><br>
<div class="container">
    <h4>Comidas:</h4>
    <div class="row row-cols-12 row-cols-md-3 g-4">
        <?php 
        $productos = new Productos();
        $result = $productos->getComidasProductos();
        
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
</div><br><br>
<div class="container">
    <h4>Snacks:</h4>
    <div class="row row-cols-12 row-cols-md-3 g-4">
        <?php 
        $productos = new Productos();
        $result = $productos->getSnacksProductos();
        
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
</div><br><br>
<div class="container">
    <h4>Bebidas:</h4>
    <div class="row row-cols-12 row-cols-md-3 g-4">
        <?php  
        $productos = new Productos();
        $result = $productos->getBebidasProductos();
        
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