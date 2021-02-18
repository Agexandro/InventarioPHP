<div class="contenedor">
    <p class="form-title">Agregar nuevo medicamento</p>
    <form action="data/insert.php" method="POST" id="form_medicamento">
        <div class="field">
            <label for="clave">Clave</label>
            <input type="text" name="clave" class="input">
            <input type="text" name="submit_medicine" value="true" hidden>
        </div>
        <div class="field">
            <label for="desc">Descripción</label>
            <textarea type="text" name="desc" class="input textarea"></textarea>
        </div>
        <div class="field">
            <button type="button" onclick="validar()" name="submit_medicine" class="btn success">Guardar</button>
        </div>
        <div class="field">
            <p id="alerta"></p>
        </div>
    </form>
</div>