<div class="modal-dialog curved-table" id="addModal">
    <div class="modal-content">
        <div class="modal-header d-flex justify-content-center">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresa tus datos</h1>
        </div>
        <div class="modal-body">
            <div class="mb-3 row">
                <label for="matricula" class="col-sm-2 col-form-label">Matrícula: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="matricula">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre: </label>
                <div class="col-sm-10">
                    <!-- Cambiado de <label> a <input> para que se pueda editar -->
                    <input type="text" class="form-control" id="nombre" disabled>
                </div>
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <!-- Corregido el nombre de la función a buscarNombre() -->
            <button class="btn btn-dark-blue curved-table" type="button" onclick="buscarNombre();">Agregar</button>
        </div>
    </div>
</div>


<script src="js/index.js?v=1"></script>
