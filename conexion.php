
<?php
    //conectar con el servidor
    $conectar = @mysqli_connect('localhost','Yutnu','1318','cfecitas');
    //verificar conexion
    if(!$conectar){
        die("No se pudo conectar con el servido: ".mysqli_connect_error());
    }else{
        $base = mysqli_select_db($conectar, 'cfecitas');
        if(!$base)
        {
            echo"No se encontro la base de datos";
        }
    }
    //recuperar variables
    $numero_servicio = $_POST['numero_servicio'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $telefono_usuario = $_POST['telefono_usuario'];
    $correo_usuario = $_POST['correo_usuario'];
    $motivo_cita = $_POST['motivo_cita'];
    $dia_cita = $_POST['dia_cita'];
    $hora_cita = $_POST['hora_cita'];
    $busqueda = mysqli_query($conectar, "SELECT * FROM citas WHERE dia_cita ='$dia_cita' AND hora_cita ='$hora_cita'");
    if(mysqli_num_rows($busqueda)>0)
    {
        echo 
            "<p style='color:rgb(157, 158, 157);
                    font-size: x-large;
                    font-weight: bolder;
                    position: fixed;
                    width: 100%;
                    text-align: center;
                    bottom: 30%;'>
                El horario seleccionado no esta disponible favor de seleccionar otro horario
            </p>";
        echo
        "<a href='Registro.php'><button id='botons' style='border-radius: 50px;
                background: #098150;
                color: white;
                font-size: medium;
                font-weight: bold;
                position: fixed;
                bottom: 10%;
                left: 45%;
                height: 50px;
                width: 150px;
                text-align: center;
                cursor: pointer;'>
            Regresar
        </button></a>";
    }
    else
    {
        $base_datos = "INSERT INTO citas (numero_servicio,nombre_usuario,telefono_usuario,correo_usuario,motivo_cita,dia_cita,hora_cita) VALUES ('$numero_servicio','$nombre_usuario','$telefono_usuario','$correo_usuario','$motivo_cita','$dia_cita','$hora_cita')";
    }
    $ejecutar = mysqli_query($conectar,$base_datos);
    if(!$ejecutar)
    {
        echo "Error".mysqli_error($conectar);
    }
?>