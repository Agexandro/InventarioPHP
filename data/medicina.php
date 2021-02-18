<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Clave</th>
            <th>Descripción</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = mysqli_query($conn, "select * from medicamento");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $clave = $row['clave'];
                $desc = $row['descripcion'];
                echo "<tr>";
                echo "<td>{$clave}</td>";
                echo "<td>{$desc}</td>";
                echo "<td><button type='button' class='button is-danger is-small' onclick='getID(`$clave`)'><i class='fa fa-trash'></i></button></td>";
                echo "<td><button type='button' class='button is-success is-small' onclick='update(`$clave`)'><i class='fa fa-pencil'></i></button></td>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>