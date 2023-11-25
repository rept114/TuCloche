<div class="jm-loadingpage"></div>
<div class="container mt-5" id="iContainer">
<h4 class="text-start">Editar:</h4>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-10 mx-auto">
        <table class="table curved-table table-light">
            <thead class="text-center">
                <tr>
                <th scope="col" class="fs-5">Inserte los datos a editar:</th>
                <th scope="col" class="fs-5"></th>
                </tr>
            </thead>
            <tbody class="text-center">
            <?php
                include '../appCode/clsProductos.php';   
                $productos = new Productos();
                $result = $productos->getProductosall();
                foreach ($result as $row) {
            ?>
                <tr>
                <td class="h5">Nombre:</td>
                <td class="h5">
                    <input type="email" class="form-control">
                </td>
                </tr>
                <tr>
                <td class="h5">Precio:</td>
                <td class="h5">
                    <input type="email" class="form-control">
                </td>
                </tr>
                <tr>
                <td class="h5">Descripción:</td>
                <td class="h5">
                    <input type="email" class="form-control">
                </td>
                </tr>
                <tr>
                <td class="h5">Categoría:</td>
                <td class="h5">
                    <input type="email" class="form-control">
                </td>
                </tr>
                <tr>
                <td class="h5">Cantidad:</td>
                <td class="h5">
                    <input type="email" class="form-control">
                </td>
                </tr>
                <tr>
                <td class="h5">Precio:</td>
                <td class="h5">
                    <input type="email" class="form-control">
                </td>
                </tr>
                <tr>
                <td class="h5">Codigo:</td>
                <td class="h5">
                    <input type="email" class="form-control">
                </td>
                </tr>
                <tr>
                <td class="h5">Imágen:</td>
                    <td class="h5" colspan="2">
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </td>
                </tr>
            <?php
                }
            ?>
                <tr>
                <td class="h5"></td>
                <td class="h5" colspan="2">
                    <button class="btn btn-dark-blue curved-table w-50" type="button">Editar</button>
                </td>
                </tr>
        </table>
     </div>
  </div>
</div>