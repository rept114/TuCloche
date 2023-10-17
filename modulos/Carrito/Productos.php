<div class="container text-center mt-5" id="iContainer">
    <div id="pageback">
        <a href="index.php" class="btn back-btn">
            <img src="imgs/back.png" alt="Back" style="max-width: 100%; max-height: 100%;">
            <h5>Atrás</h5>
        </a>
        <h4 id="bienvenido">Mi carrito</h4> 
    </div>  
</div>
<br><br>
<div class="container border-top border-4 row row-cols-1 row-cols-md-3 g-4" id="cContainer"></div><br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
                <div class="card h-100">
                <img src="imgs/Hotcakes.jpg" class="card-img-top custom-image" alt="Hot Cakes">
                <div class="card-body">
                    <h5 class="card-title">Hot Cakes</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="font-size: 22px;">$29.00</div>
                        <button class="btn btn-sm" style="width: 50px; height: 50px;">
                            <img src="imgs/menos.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="imgs/Chocomilk.jpg" class="card-img-top custom-image" alt="Chocomilk" style="max-width: 100%; max-height: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Chocomilk</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="font-size: 22px;">$22.00</div>
                        <button class="btn btn-sm" style="width: 50px; height: 50px;">
                            <img src="imgs/menos.png" alt="Small Button Image 1" style="max-width: 100%; max-height: 100%;">
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="card text-bg-dark">
                <a href="#" class="btn">
                    <img src="imgs/PLUS_CARRITO.png" class="card-img img-fluid" alt="Agregar" style="max-width: 300px; max-height: 300px;">
                </a>
            </div>


            <style>
    .curved-table {
        border-radius: 30px; /* Adjust the radius as needed */
        overflow: hidden;
    }
    .curved-table th, .curved-table td {
        padding: 10px;
    }

    .btn-dark-blue {
    background-color: #0b1a5c; /* Dark Blue color code */
    color: #fff; /* Text color */  
  }

    .btn {
    font-size: 21px; /* Adjust the font size as needed */
  }

</style>

<table class="table curved-table table-hover table-light table-borderless">
    <thead class="text-center">
        <tr>
            <th scope="col" class="h4">Pedido</th>
            <th scope="col" class="h4">Precio</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <tr>
            <td class="h5">Hot Cakes</td>
            <td class="h5">$29.00</td>
        </tr>
        <tr>
            <td class="h5">Chocomilk</td>
            <td class="h5">$22.00</td>
        </tr>
        <tr>
            <td class="h5">Total</td>
            <td class="h5">$43.00</td>
        </tr>
    </tbody>
</table>

<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-light curved-table" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar tarjeta de pago</button>
  <br>
  <button class="btn btn-dark-blue curved-table" type="button">Proceder al pago</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tarjeta de pago</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
        <div class="mb-3">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre completo">
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Número tarjeta">
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="mm/yy">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="CVV">
                </div>
            </div>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Recuerda mi tarjeta</label>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-dark-blue curved-table" type="button">Agregar</button>
      </div>
    </div>
  </div>
</div>