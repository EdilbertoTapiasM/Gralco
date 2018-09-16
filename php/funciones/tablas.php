<?php
require_once "conexion.php";
$con = conexion();
?>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h2>Reporte De Novedades</h2><br>
        <br>
        <caption>
            <label for="buscar">Cedula Del Empleado:</label>
            <input type="text" name="buscar" id="buscar" value="0">
        </caption>
        <br><br>
        <table class="table table-hover table-condensed table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">*****</th>
                </tr>
            </thead>
            <?php 
                $sql = "SELECT NIT, NMBRE_NIT, CDGO_PAIS  FROM NITS WHERE NIT = '$cc'";
                $result = odbc_exec($con, $sql);
                $cont = 1;
                while(odbc_fetch_row($result)){
            ?>
            <tr>
                <td><?php echo $cont; ?></td>
                <td><?php echo odbc_result($result, 1); ?></td>
                <td><?php echo odbc_result($result, 2); ?></td>
                <td><?php echo odbc_result($result, 3); ?></td>
            </tr>
            <?php
                $cont++;
                }
            ?>
        </table>
        <br>
        <br>
        <caption>
            <button class="btn btn-primary" data-toggle="modal" data-target="#registrarNovedad">Agregar Novedad

            </button>
        </caption>
        <br><br>
        <table class="table table-hover table-condensed table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Turno</th>
                    <th scope="col">Dia</th>
                    <th scope="col">Hora Ingreso</th>
                    <th scope="col">Hora Salida</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#editarNovedad"></button>
                </td>
                <td>
                    <button class="btn btn-danger"></button>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
</div>

