<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Clave</th>
            <th>Descripción</th>
            <th>Lote</th>
            <th>Piezas</th>
            <th>Caducidad</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php

        $year = date("Y");
        $month = date("m");
        $redRange;
        $yellowRange;

        if ($month <= 9) {
            $redRange = $year . "-" . ($month + 3) . "-01";
        } else {
            $redRange = ($year + 1) . "-" . ($month - 9) . "-01";
        }

        if ($month <= 6) {
            $yellowRange = $year . "-" . ($month + 6) . "-01";
        } else {
            $yellowRange = ($year + 1) . "-" . ($month - 6) . "-01";
        }

        $negro = mysqli_query($conn, "select clave,descripcion,lote,piezas,caducidad from medicamento inner join u013 on medicamento.clave = u013.clave_medicamento where u013.caducidad <= curdate()");
        $verde = mysqli_query($conn, "select clave,descripcion,lote,piezas,caducidad  from medicamento inner join u013 on medicamento.clave = u013.clave_medicamento where u013.caducidad >'{$yellowRange}'");
        $rojo = mysqli_query($conn, "select clave,descripcion,lote,piezas,caducidad  from medicamento inner join u013 on medicamento.clave = u013.clave_medicamento where u013.caducidad >curdate() and u013.caducidad <= '{$redRange}'");
        $amarillo = mysqli_query($conn, "select clave,descripcion,lote,piezas,caducidad  from medicamento inner join u013 on medicamento.clave = u013.clave_medicamento where u013.caducidad > '{$redRange}' and u013.caducidad <= '{$yellowRange}'");

        if (mysqli_num_rows($verde) > 0) {
            while ($row = mysqli_fetch_assoc($verde)) {
                echo "<tr id='verde'>";
                echo "<td>{$row['clave']}</td>";
                echo "<td>{$row['descripcion']}</td>";
                echo "<td>{$row['lote']}</td>";
                echo "<td>{$row['piezas']}</td>";
                echo "<td>{$row['caducidad']}</td>";
                echo "<td><a  class='button is-danger is-small' onclick='getID(`{$row['clave']}`,`{$row['lote']}`,`{$row['caducidad']}`)'><i class='fa fa-trash'></i></a></td>";
                echo "<td><a  class='button is-success is-small'  onclick='update(`{$row['clave']}`,`{$row['lote']}`,`{$row['piezas']}`,`{$row['caducidad']}`)'><i class='fa fa-pencil'></i></a></td>";
                echo "</tr>";
            }
        }


        if (mysqli_num_rows($amarillo) > 0) {
            while ($row = mysqli_fetch_assoc($amarillo)) {
                echo "<tr id='amarillo'>";
                echo "<td>{$row['clave']}</td>";
                echo "<td>{$row['descripcion']}</td>";
                echo "<td>{$row['lote']}</td>";
                echo "<td>{$row['piezas']}</td>";
                echo "<td>{$row['caducidad']}</td>";
                echo "<td><a  class='button is-danger is-small' onclick='getID(`{$row['clave']}`,`{$row['lote']}`,`{$row['caducidad']}`)'><i class='fa fa-trash'></i></a></td>";
                echo "<td><a  class='button is-success is-small'  onclick='update(`{$row['clave']}`,`{$row['lote']}`,`{$row['piezas']}`,`{$row['caducidad']}`)'><i class='fa fa-pencil'></i></a></td>";
                echo "</tr>";
            }
        }


        if (mysqli_num_rows($rojo) > 0) {
            while ($row = mysqli_fetch_assoc($rojo)) {
                echo "<tr id='rojo'>";
                echo "<td>{$row['clave']}</td>";
                echo "<td>{$row['descripcion']}</td>";
                echo "<td>{$row['lote']}</td>";
                echo "<td>{$row['piezas']}</td>";
                echo "<td>{$row['caducidad']}</td>";
                echo "<td><a  class='button is-danger is-small' onclick='getID(`{$row['clave']}`,`{$row['lote']}`,`{$row['caducidad']}`)'><i class='fa fa-trash'></i></a></td>";
                echo "<td><a  class='button is-success is-small'  onclick='update(`{$row['clave']}`,`{$row['lote']}`,`{$row['piezas']}`,`{$row['caducidad']}`)'><i class='fa fa-pencil'></i></a></td>";
                echo "</tr>";
            }
        }


        if (mysqli_num_rows($negro) > 0) {
            while ($row = mysqli_fetch_assoc($negro)) {
                echo "<tr id='negro'>";
                echo "<td>{$row['clave']}</td>";
                echo "<td>{$row['descripcion']}</td>";
                echo "<td>{$row['lote']}</td>";
                echo "<td>{$row['piezas']}</td>";
                echo "<td>{$row['caducidad']}</td>";
                echo "<td><a  class='button is-danger is-small' onclick='getID(`{$row['clave']}`,`{$row['lote']}`,`{$row['caducidad']}`)'><i class='fa fa-trash'></i></a></td>";
                echo "<td><a  class='button is-success is-small'  onclick='update(`{$row['clave']}`,`{$row['lote']}`,`{$row['piezas']}`,`{$row['caducidad']}`)'><i class='fa fa-pencil'></i></a></td>";
                echo "</tr>";
            }
        }

        ?>
    </tbody>
</table>