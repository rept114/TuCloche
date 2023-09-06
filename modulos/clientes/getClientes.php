<div class="row text-center">
    <div class="col">
        <h1>Listado de Clientes</h1>
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">RFC</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
<?php
                    include "D:/xampp/htdocs/cactus/vendor/appCode/clsClientes.php";
                    $clientes = new Clientes();
                    $result = $clientes->getClientes();

                    $ren = 1;
                    foreach($result as $row)
                    {
?>
                        <tr>
                            <th scope="col"><?=$ren?></th>
                            <td scope="col"><?=$row["id"]?></td>
                            <td scope="col"><?=$row["nombre"]?></td>
                            <td scope="col"><?=$row["rfc"]?></td>
                            <td scope="col"><?=$row["telefono"]?></td>
                            <td scope="col">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-primary btn-sm" onclick="addCliente();">
                                        <i class="fas fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm" onclick="editCliente();">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm" onclick="deleteCliente();">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

<?php
                    }
?>
                        <tr>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col">
                                <button class="btn btn-primary btn-sm" onclick="editCliente(0);"><i class="fa solid fa-plus"></i></button>
                            </td>
                        </tr>

            </tbody>
        </table>
    </div>

</div>