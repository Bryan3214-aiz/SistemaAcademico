<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/styleLogin.css" rel="stylesheet" />      
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <title>UH - INICIAR SESION</title>   
</head>
<body>
    <div class="login-box">
        <img src="img/UH.jpg" class="avatar" alt="Avatar Image" />
        <h1>SISTEMA ACADÉMICO COLEGIO UH</h1>
        <form action="index.php" method="post"> 
            <input type="hidden" name="accion" value="validar_login">  
            
            <!-- TIPO USUARIO INPUT -->
            <label for="select">SELECCIONE SU TIPO DE USUARIO</label>
            <select id="select" name="tipo_usuario">
              <option value="1">Estudiante</option>
              <option value="2">Profesor</option>
              <option value="3">Administrador</option>
            </select>
 
            <!-- USUARIO INPUT -->
            <label for="username">CORREO</label>
            <input type="email" name="email" class="auto-style1" placeholder="Ingrese su correo académico" required/>
            
            <!-- CONTRASEÑA INPUT -->
            <label for="password">CONTRASEÑA</label>
            <input type="password" name="pass" class="auto-style1" placeholder="Ingrese su contraseña" required/>
            
            <button type="submit" class="auto-styleBoton">Iniciar sesión</button><br>
            
            <a href="#">¿No te acuerdas de tu contraseña?</a><br />
            <a href="index.php?accion=crearCuenta">Crear cuenta nueva</a><br>
            <a href="index.php?accion=volverI">Volver al inicio</a>
        </form>                      
    </div>

</body>
</html>

