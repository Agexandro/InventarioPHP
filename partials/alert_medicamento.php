<div style="position: fixed; top: 46%; width: 100%;">
    <?php
    if (isset($_GET["result"])) {
        $code = $_GET["result"];

        if ($code === "ok") {
            echo "<p id='alert' class='alert success'>Medicamento agregado</p>";
        } else {
            if ($code === "exists") {
                echo "<p id='alert' class='alert danger'>El medicamento ya existe</p>";
            } else {
                echo "<p id='alert' class='alert danger'>El medicamento no fue agregado</p>";
            }
        }
        r::remove();
    }

    if (isset($_GET["update"])) {
        $code = $_GET["update"];

        if ($code === "ok") {
            echo "<p id='alert' class='alert success'>Medicamento actualizado</p>";
        } else {
            echo "<p id='alert' class='alert danger'>El medicamento no pudo ser actualizado</p>";
        }
        r::remove();
    }

    if (isset($_GET["delete"])) {
        $code = $_GET["delete"];

        if ($code === "ok") {
            echo "<p id='alert' class='alert success'>Medicamento eliminado</p>";
        } else {
            echo "<p id='alert' class='alert danger'>El medicamento no fue agregado</p>";
        }
    r::remove();

    }
    ?>

    <?php 
    class r{
    static function remove(){
        echo "<script>
        setTimeout(() => {
        document.getElementById('alert').remove();
        }, 2500);
        </script>";}}
    ?>
</div>