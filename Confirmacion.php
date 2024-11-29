<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="Yuyu"/>
    <link rel="stylesheet" href="Diseño/presentacion.css"/>
    <link rel="shortcut icon" href="Diseño/icono.ico" type="image/x-icon" />
    <title>CFE citas-Comitan</title>
  </head>
  <body class="color2">
    <div class="rect">
      <div class="box">
        <img src="Diseño/Banner.png" 
          alt="banner encabezado" 
          class="banera"/>
      </div>
      <div class="titulo"><p>Agende su cita para una mejor experiencia</p></div>
    </div>
    <?php
      require("conexion.php");
        if ($dia_cita=='dia_cita' && $hora_cita='hora_cita')
        {
            echo 
            "<p class='texto_datos' style='bottom: 30%;'>El horario seleccionado no esta disponible favor de seleccionar otro horario</p>";
            echo
            "<a href='Registro.php'><button id='botons' class='boton'>Regresar</button></a>";
        }
        else
        {
          $seleccionar = "SELECT * FROM citas ORDER BY ID DESC LIMIT 1";
          $resultado = mysqli_query($conectar,$seleccionar) or die(mysqli_error($conectar));
          while($datos_con = mysqli_fetch_array($resultado))
          {
              echo
              "<p class='texto_datos' style='bottom: 45%;'>Su cita fue reservada a nombre de: ". $datos_con['nombre_usuario'] . "</p>";
              echo
              "<p class='texto_datos' style='bottom: 40%;'>el dia: " . $datos_con['dia_cita'] . "</p>";
              echo
              "<p class='texto_datos' style='bottom: 35%;'>en el horario de las: ". $datos_con['hora_cita'] . "</p>";
              echo
              "<a href='Despedida.html'><button id='botons' class='boton'>Continuar</button></a>";
          }
        }
      
      require("cerrar.php");
    ?>

    <div class="leyenda"><p>CAC Comitán de Dominguez</p></div>
  </body>
</html>