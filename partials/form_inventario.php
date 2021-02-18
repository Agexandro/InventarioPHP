<form action="<?php echo $action; ?>" method="POST" id="<?php echo $idform ?>">
    <div class="field">
        <label for="<?php echo $action; ?>">Medicamento</label>
        <select name="clave" id="<?php echo $_clave; ?>" class="select is-small">
            <?php
            include("data/select_med.php");
            ?>
        </select>
    </div>
    <div class="field">
        <label for="<?php echo $_lote; ?>">Lote</label>
        <input type="text" id="<?php echo $_lote; ?>" name="lote" class="input">
    </div>
    <div class="field">
        <label for="<?php echo $_piezas; ?>">Piezas</label>
        <input type="number" id="<?php echo $_piezas; ?>" name="piezas" class="input" placeholder="0">
    </div>
    <div class="field">
        <label for="<?php echo $_cad; ?>">Caducidad</label>
        <input type="date" id="<?php echo $_cad; ?>" name="caducidad" class="input-date">
    </div>
    <div class="field">
        <input type="text" name="<?php echo $idform ?>" value="true" hidden>
        <button type="button" onclick="<?php echo $button; ?>" class="btn success">Guardar</button>
        <?php echo $_item; ?>
    </div>
    <div class="field">
        <p id="alerta"></p>
    </div>
</form>