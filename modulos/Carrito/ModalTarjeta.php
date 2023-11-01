<div class="modal-dialog curved-table">
    <div class="modal-content">
        <div class="modal-header d-flex justify-content-center">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tarjeta de pago</h1>
        </div>
        <div class="modal-body">
        <form>
        <div class="mb-3">
            <input type="email" class="form-control" id="nombre_completo" placeholder="Nombre completo">
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" id="numero_tarjeta" placeholder="Número tarjeta">
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <input type="email" class="form-control" id="vencimiento" placeholder="mm/yy">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <input type="email" class="form-control" id="codigo_seguridad" placeholder="CVV">
                </div>
            </div>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Recordar mi tarjeta</label>
        </div>
        </form>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-dark-blue curved-table" type="button" onclick="ModalMatricula();">Agregar</button>
        </div>
    </div>
</div>