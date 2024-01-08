<?php
/* Smarty version 4.3.4, created on 2023-12-13 03:05:53
  from 'C:\xampp\htdocs\proyectoBVT\view\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6579118158b6d2_88055120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95c909ebd6b9fecf694f061f7a78d04a55c519a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoBVT\\view\\templates\\Login.tpl',
      1 => 1702432695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6579118158b6d2_88055120 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

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

<?php }
}
