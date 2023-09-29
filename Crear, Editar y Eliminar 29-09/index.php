<?php

$conexion = mysqli_connect("localhost", "root", "", "usuarios");

if(isset($_POST['register'])){ // Decimos que si existe el boton de Registrarse, que defina las variables de los POST

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $numcel = $_POST['phonename'];
    $compañia = $_POST['company'];
    $direccion = $_POST['address'];
    $web = $_POST['web'];
    $bdate = $_POST['bdate'];
    $notas = $_POST['notas'];
    $nick = $_POST['nick'];

    // Decimos que si la longitud de la string de nombre es mayor a cero, que haga la consulta sql y la ejecute con el query
    if(strlen($nombre) > 0 && strlen($apellido) > 0 && strlen($email) > 0 && strlen($pwd) > 0 &&strlen($numcel) > 0  && strlen($compañia) > 0 && strlen($direccion) > 0 && strlen($web) > 0 && strlen($bdate) && strlen($notas) > 0 && strlen($nick)>0){
        // Esto es todo para el userdetails
        $sqludetails = "INSERT INTO userdetails (name, surname, email, pwd, phonename, company, address, web, bdate, label_varchar, nick) VALUES('$nombre', '$apellido', '$email', '$pwd', '$numcel', '$compañia', '$direccion', '$web', '$bdate', '$notas', '$nick')";
        $resultadoudetails = mysqli_query($conexion, $sqludetails);

        // Ahora hacemos lo mismo pero para la tabla users brindandole la información para el created_At
        $sqluser = "INSERT INTO user (nick, mail, pwd, created_At) VALUES ('$nick', '$email', '$pwd', NOW())";
        $resultadouser = mysqli_query($conexion, $sqluser);
        
    }
    else{
        echo '<script language="javascript">alert("Hay que rellenar todos los campos");</script>';
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registar</h1>
    <div class="container">
        <div class="register">
            <form action="" method="POST">
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre">
                </div>
                <div>
                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" id="apellido">
                </div>
                <div>
                    <label for="apellido">Email:</label>
                    <input type="text" name="email" id="email">
                </div>
                <div>
                    <label for="apellido">Contraseña:</label>
                    <input type="text" name="pwd" id="pwd">
                </div>
                <div>
                    <label for="phonename">Numero de telefono</label>
                    <input type="number" name="phonename" id="phonename">
                </div>
                <div>
                    <label for="company">Compañia</label>
                    <input type="text" name="company" id="company">
                </div>
                <div>
                    <label for="address">Direccion</label>
                    <input type="text" name="address" id="address">
                </div>
                <div>
                    <label for="web">Web</label>
                    <input type="text" name="web" id="web">
                </div>
                <div>
                    <label for="bdate">Fecha de Cumpleaños</label>
                    <input type="date" name="bdate" id="bdate">
                </div>
                <div>
                    <label for="notas">Notas</label>
                    <input type="text" name="notas" id="notas">
                </div>
                <div>
                    <label for="nick">Nick</label>
                    <input type="text" name="nick" id="nick">
                </div>
                <div>
                    <input type="submit" value="Registrarse" name="register"></input>
                </div>
            </form>
        </div>
    </div>

    <?php

        if(isset($_POST['eliminar'])){
            $nick = $_POST['nick'];
            if(strlen($nick) > 0){
                $sqldel = "DELETE FROM userdetails WHERE nick = '$nick'";
                $resultadodel = mysqli_query($conexion, $sqldel);

                $sqlupdel = "UPDATE user SET Deleted_At = NOW() WHERE nick = '$nick'";
                $resultadoupdel = mysqli_query($conexion, $sqlupdel);
            }
            else{
                echo '<script language="javascript">alert("No ingresaste el nick de referencia");</script>';
            }
        }
        
    ?>
    <h1>Borrar</h1>
    <div class="borrar">
        <form action="" method="POST">
            <div>
                <label for="nombre">Nick de referencia:</label>
                <input type="text" name="nick" id="nick">
            </div>
            <div>
                <input type="submit" value="Eliminar" name="eliminar" id="eliminar">
            </div>
        </form>
    </div>

    <?php 
        if(isset($_POST['editar'])){
            
            $nickref = $_POST['nickref'];
            if(strlen($nickref) > 0){
                $nombre = $_POST['nombre'];

    
                if(strlen($nombre > 0)){
                    
                    // Esto lo hacemos para editar
                    $sqlupdate= "UPDATE userdetails SET name='$nombre' WHERE nick='$nickref'";
                    $resultadoupdate = mysqli_query($conexion, $sqlupdate);

                    // Esto lo hacemos para actualizar
                    $sqlupupd = "UPDATE user SET Updated_At = NOW() WHERE nick = '$nickref'";
                    $resultadoupupd = mysqli_query($conexion, $sqlupupd);
                }
                else{
                    echo '<script language="javascript">alert("No ingresaste el nombre");</script>';
                }
            }
            else{
                echo '<script language="javascript">alert("No ingresaste el nick de referencia");</script>';
            }
        }
    ?>
    <h1>Actualizar Nombre</h1>
    <div class="actualizar">
        <form action="" method="POST">
            <div>
                <label for="nickref">Nick de referencia:</label>
                <input type="text" name="nickref" id="nickref" required>
            </div>
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div>
                <input type="submit" value="Editar" name="editar" id="editar">
            </div>
        </form>
    </div>
    <br> 
    <table border="2">
    <tr>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Email</td>
        <td>Contraseña</td>
        <td>Numero de telefono</td>
        <td>Compañia</td>
        <td>Direccion</td>
        <td>Web</td>
        <td>Cumpleaños</td>
        <td>Notas</td>
        <td>Nickname</td>
    </tr>
    <?php 
    
    $sqltabla = "SELECT * FROM userdetails";
    $restuladotabla = mysqli_query($conexion, $sqltabla);
    
    while($mostrar = mysqli_fetch_array($restuladotabla)){ // El bucle  cada vez que se ejecuta, $mostrar se le asignara una fila de resultados
        // El mysqli_fetch_array devuelve una fila de resultados como un array asociativo, $mostrar almacena los datos de cada fila de resultadotabla
    ?>
    <tr>
        <td><?php echo $mostrar['name'] ?></td>
        <td><?php echo $mostrar['surname'] ?></td>
        <td><?php echo $mostrar['email'] ?></td>
        <td><?php echo $mostrar['pwd'] ?></td>
        <td><?php echo $mostrar['phonename'] ?></td>
        <td><?php echo $mostrar['company'] ?></td>
        <td><?php echo $mostrar['address'] ?></td>
        <td><?php echo $mostrar['web'] ?></td>
        <td><?php echo $mostrar['bdate'] ?></td>
        <td><?php echo $mostrar['label_varchar'] ?></td>
        <td><?php echo $mostrar['nick'] ?></td>
    </tr>
    <?php 
    } ?>
</table>
</body>
</html>