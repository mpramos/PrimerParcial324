<?=$cabecera ?>
<a class="btn btn-success" href="<?=base_url('crear')?>" >Agregar una persona</a>
<br>
<br>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>CI</th>
                    <th>Nombre completo</th>
                    <th>Fecha de nacimiento</th>
                    <th>Telefono</th>
                    <th>Departamento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($personas as $persona): ?>

                <tr>
                    <td><?php echo $persona['ci']; ?></td>
                    <td><?php echo $persona['nombre_com']; ?></td>
                    <td><?php echo $persona['fecha_nac']; ?></td>
                    <td><?php echo $persona['telefono']; ?></td>
                    <td><?php echo $persona['departamento']; ?></td>
                    <td> 

                    <a href="<?=base_url('editar/'.$persona['ci'])?>" class="btn btn-info" type="button">Editar</a>
                    <a href="<?=base_url('borrar/'.$persona['ci'])?>" class="btn btn-danger" type="button">Borrar</a>
                    </td>
                </tr>

            <?php endforeach; ?>

            </tbody>
        </table>
<?=$pie ?>