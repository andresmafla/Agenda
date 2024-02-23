<div class="row bg-white">
    <h1 class="text-dark fw-bold fs-1">Registrate</h1>
    <p class="fw-lighter fw-normal fs-6">Es rapido y facil.</p>
    <form action="crearCuenta2.php" method="POST" id="frmCrearCuenta">
        <div class="row">
            <div class="col-sm-6">
                <label for="txtnom" class="form-label">Nombre</label>
                <input onclick="nombre()" type="text" required name="txtnom" id="txtnom" class="form-control">
            </div>
            <div class="col-sm-6">
                <label for="txtape" class="form-label">Apellido</label>
                <input onclick="apellido()" type="text" required name="txtape" id="txtape" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label for="txttel" class="form-label">Número de Teléfono</label>
            <input onclick="numero()" type="number" required min="10" name="txttel" id="txttel" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtcon" class="form-label">Contraseña</label>
            <input onclick="contraseña()" type="password" required minlength="8" name="txtcon" id="txtcon"
                class="form-control">
        </div>
        <div class="mb-3">
            <label for="texfec" class="form-label">Fecha de nacimiento</label>
            <input onclick="fecha()" type="date" required name="txtfec" id="txtfec" class="form-control">
        </div>

        <div class="d-grid gap-2">
            <input type="submit" value="Registrarte" class="btn btn-primary btn-lg">
        </div>
        <br>
    </form>
</div>