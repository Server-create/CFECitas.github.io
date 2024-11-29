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
      <form action="Confirmacion.php" method="POST">
        <div class="contenedor">
          <div class="contenedor2">
            <label for="ns">Número de servicio: </label>
            <input type="number" id="numero_servicio" name="numero_servicio" />
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" />
            <label for="telefono">Número de teléfono: </label>
            <input type="tel" id="telefono_usuario" name="telefono_usuario" />
            <label for="correo">Correo electronico: </label>
            <input type="email" id="correo_usuario" name="correo_usuario" />
            <label for="motivo">Motivo de la cita: </label>
              <select id="motivo_cita" name="motivo_cita">
                <option value="vacio">...</option>
                <option value="contrato">Contrato</option>
                <option value="reconexion">Reconexión</option>
                <option value="aclaraon">Aclaración</option>
                <option value="consulta">Consulta</option>
                <option value="suspension">Suspensión de servicio</option>
                <option value="actualizacion">Actualización de datos</option>
              </select>
          </div>
          <div class="contenedor2">
            <label for="dia">Seleccione el dia</label>
            <input type="date" id="dia_cita" name="dia_cita" class="fecha"/>
            <label for="hora">Seleccione la hora</label>
              <select id="hora_cita" name="hora_cita">
                <option value="8:00">8:00</option>
                <option value="8:00">8:30</option>
                <option value="9:00">9:00</option>
                <option value="8:00">9:30</option>
                <option value="10:00">10:00</option>
                <option value="10:00">10:30</option>
                <option value="11:00">11:00</option>
                <option value="11:00">11:30</option>
                <option value="12:00">12:00</option>
                <option value="12:00">12:30</option>
                <option value="13:00">13:00</option>
                <option value="13:00">13:30</option>
                <option value="14:00">14:00</option>
                <option value="14:00">14:30</option>
              </select>
          </div>
          <br><br><br>
          <input type="submit" value="Agendar" id="botona" class="boton" name="Agendar"/>
        </div>
      </form>
      <div class="leyenda"><p>CAC Comitán de Dominguez</p></div>
  </body>
</html>