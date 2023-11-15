<link rel="stylesheet" href="css/Productos.css">
<br></br>
<div class="container text-center mt-5" id="iContainer">
    <div id="pageback">
        <a href="" onclick="Inicio();" class="btn back-btn">
            <img src="imgs/back.png" alt="Back" style="max-width: 100%; max-height: 100%;">
            <h5>Atrás</h5>
        </a>
        <h4 id="bienvenido">Mi carrito</h4> 
    </div>  
</div>
<div class="container border-top border-4 row row-cols-1 row-cols-md-3 g-4" id="cContainer"></div><br>

<div class="container row row-cols-12 row-cols-md-3 g-4">
    <?php
    include '../../appCode/clsUsuarios.php';   
    $usuarios = new Usuarios();
    $result = $usuarios->getPedidosAgregados();
    
    foreach ($result as $row) {
    ?>
    <div class="col">
        <div class="card h-100">
            <img src="<?=$row["img"]?>" class="card-img-top custom-image" alt="Hot Cakes">
            <div class="card-body">
                <h5 class="card-title"><?=$row["producto"]?></h5>
                <div class="d-flex justify-content-between align-items-center">
                    <div style="font-size: 22px;">$<?=$row["precio"]?></div>
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

    <div class="row">
        <div class="col text-center">
            <div class="card text-bg-dark">
                <a href="#" class="btn">
                    <img src="imgs/PLUS_CARRITO.png" class="card-img img-fluid" alt="Agregar" style="max-width: 300px; max-height: 300px;">
                </a>
            </div>
        </div>


        <table class="table curved-table table-hover table-light table-borderless">
            <thead class="text-center">
                <tr>
                    <th scope="col" class="h4">Pedido</th>
                    <th scope="col" class="h4">Precio</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php    
                    $usuarios = new Usuarios();
                    $result = $usuarios->getPedidosAgregados();
                    foreach($result as $row)
                    {
                ?>
                <tr>
                    <td class="h5"><?=$row["producto"]?></td>
                    <td class="h5">$<?=$row["precio"]?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-light curved-table" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="ModalTarjeta();">Agregar tarjeta de pago</button>
  <br>
  <button class="btn btn-dark-blue curved-table" type="button" onclick="Ppago();">Proceder al pago</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Contenido del modal -->
    </div>
  </div>
</div>
