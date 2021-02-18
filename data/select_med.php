<?php
$todo = mysqli_query($conn, "select * from medicamento order by descripcion asc");
?>
<?php
if (mysqli_num_rows($todo) > 0) {
    while ($row = mysqli_fetch_assoc($todo)) {
        echo "<option value='{$row['clave']}'>{$row['descripcion']}</option>";
    }
}
