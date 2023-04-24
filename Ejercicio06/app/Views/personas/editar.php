<?=$cabecera?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Ingresar datos de la Persona</h5>
        <p class="card-text">
        <form method="post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">

            <div class="form-group">
                <label for="ci">CI</label>
                <input type="text" value=<?=$persona['ci']?> name="ci" id="ci" class="form-control" placeholder="Ingrese su CI">
            </div>

            <div class="form-group">
                <label for="nombre_com">Nombre</label>
                <input type="text" value=<?=$persona['nombre_com']?> name="nombre_com" id="nombre_com" class="form-control" placeholder="Ingrese su nombre">
            </div>

            <div class="form-group">
                <label for="fecha_nac">Fecha de nacimiento</label>
                <input type="text" value=<?=$persona['fecha_nac']?> name="fecha_nac" id="fecha_nac" class="form-control" placeholder="Ingrese su fecha de nacimiento">
            </div>

            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" value=<?=$persona['telefono']?> name="telefono" id="telefono" class="form-control" placeholder="Ingrese su telefono">
            </div>

            <div class="form-group">
                <label for="departamento">Departamento</label>
                <input type="text" value=<?=$persona['departamento']?> name="departamento" id="departamento" class="form-control" placeholder="Ingrese su departamento">
            </div>

            <button class="btn btn-success" type="submit">Guardar</button>
        </form>
        </p>
    </div>
</div>

<?=$pie?>