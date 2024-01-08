<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/stylecrearCuenta.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <title>UH - CREAR CUENTA</title>   
</head>
<body>
    <div class="login-box">
        <img src="img/UH.jpg" class="avatar" alt="Avatar Image"/>
        <h1>INGRESE SUS DATOS PERSONALES</h1>
        <form id="form1" action="index.php" method="post">
            <input type="hidden" name="accion" value="crear_usuario">
            
            <!-- USUARIO INPUT -->
            <label for="NM">NOMBRE</label>
            <input type="text" id="NM" name="nombre" class="auto-style1" placeholder="Registre su nombre" maxlength="10" required/>
            
            <label for="apellidos">APELLIDOS</label>
            <input type=text id="apellidos" name="ap1" class="auto-style1" placeholder="Registre su primer apellido" maxlength="10" required/>
            
            <input type="text" id="apellidos" name="ap2" class="auto-style1" placeholder="Registre su segundo apellido" maxlength="10" required/>
            
             <!-- TIPO USUARIO INPUT -->
            <label for="select">SELECCIONE SU TIPO DE USUARIO</label>
            <select id="select" name="tipo_usuario">
              <option value="1">Estudiante</option>
              <option value="2">Profesor</option>
              <option value="3" disabled>Administrador</option>
            </select>
            
            <label for="correo">CORREO</label>
            <input type="email" id="correo" name="email" class="auto-style1" placeholder="name@chispano.ac.cr" required/>
            
            <label for="con">CONTRASEÑA</label>
            <input type="password" id="con" name="pass" class="auto-style1" placeholder="Cree una contraseña" minlength="5" maxlength="14" required/>
            
            <button type="submit" class="auto-styleBoton">Crear cuenta nueva</button><br>
            <a href="index.php?accion=volverI">Volver al inicio</a>
        </form>
    </div>
</body>
</html>