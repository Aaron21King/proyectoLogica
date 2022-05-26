<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista De Usuarios</title>
</head>
<body>
    
    <table>

        <thead>
            <tr>
                
                <td>Nombre</td>
                <td>Edad</td>
                <td>Carrera</td>
            </tr>
        </thead>

        <tbody>
            <?php

                foreach ($usuarios as $user) {
                    echo "<tr>";
                    echo "<td>". $user['nombre'] ."</td>";
                    echo "<td>". $user['edad'] ."</td>";
                    echo "<td>". $user['carrera'] ."</td>";
                    echo "</tr>";
                }
            ?>
             
        </tbody>

    </table>
    <button type="button" class="btn btn-danger">Aaron Enciso</button>

   

</body>
</html>