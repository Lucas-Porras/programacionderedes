<?php


$conexion = mysqli_connect("localhost", "root", "", "labdhalaa");


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
            $id = $_POST['id'];
            if(strlen($id) > 0){
                $sqldel = "DELETE FROM userdetails WHERE id = '$id'";
                $resultadodel = mysqli_query($conexion, $sqldel);


                $sqlupdel = "UPDATE user SET Deleted_At = NOW() WHERE id = '$id'";
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
                <label for="nombre">Id de referencia:</label>
                <input type="text" name="id" id="id">
            </div>
            <div>
                <input type="submit" value="Eliminar" name="eliminar" id="eliminar">
            </div>
        </form>
    </div>


    <?php
        if(isset($_POST['editar'])){
           
            $id = $_POST['id'];
            if(strlen($id) > 0){
                $nombre = $_POST['nombre'];


   
                if(strlen($nombre > 0)){
                   
                    // Esto lo hacemos para editar
                    $sqlupdate= "UPDATE userdetails SET name='$nombre' WHERE id='$id'";
                    $resultadoupdate = mysqli_query($conexion, $sqlupdate);


                    // Esto lo hacemos para actualizar
                    $sqlupupd = "UPDATE user SET Updated_At = NOW() WHERE id = '$id'";
                    $resultadoupupd = mysqli_query($conexion, $sqlupupd);
                }
                else{
                    echo '<script language="javascript">alert("No ingresaste el nombre");</script>';
                }
            }
            else{
                echo '<script language="javascript">alert("No ingresaste el id de referencia");</script>';
            }
        }
    ?>
    <h1>Actualizar Nombre</h1>
    <div class="actualizar">
        <form action="" method="POST">
            <div>
                <label for="idref">Id de referencia:</label>
                <input type="text" name="id" id="id">
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
</body>
</html>