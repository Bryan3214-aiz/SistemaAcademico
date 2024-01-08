<?php
/* Smarty version 4.3.4, created on 2023-11-09 04:55:24
  from 'C:\xampp\htdocs\Programacion2\proyectoBVT\view\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_654c582c534d73_34570025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b8d9c01a8883acb8130346471df4c145b4b5dd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Programacion2\\proyectoBVT\\view\\templates\\Login.tpl',
      1 => 1699498521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654c582c534d73_34570025 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Sistema Academico - Iniciar Sesión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styleLogin.css">
    </head>
    <body>
        <div class="login-wrapper">
            <div class="login-side">
                <a href="index.php?accion=volverI" title="Logo"><img class="logo" src="assets/logo.png" alt="Logo"></a>
                <div class="my-form__wrapper">
                    <div class="login-welcome-row">
                        <h1>Sistema Academico</h1>
                        <p>¡Por favor ingresa tus datos!</p>
                    </div>
                    
                    <form action="index.php" method="POST" class="my-form">
                        <input type="hidden" name="accion" value="validar_login">   
                        <div class="socials-row">
                            <a href="#" title="Use Google"><img src="assets/google.png" alt="Google">Iniciar sesión con Google</a>
                            <a href="#" title="Use Apple"><img src="assets/apple.png" alt="Apple">Iniciar sesión con Apple</a>
                        </div>
                        
                        <div class="divider">
                            <div class="divider-line"></div>O<div class="divider-line"></div>
                        </div>
                        
                        <div class="text-field">
                            <label for="email">Correo:</label>
                            <input type="email"id="email"name="correo"placeholder="Ingresa tu correo electronico"required><img alt="Email Icon" src="assets/email.svg"></div>
                            
                        <div class="text-field">
                            <label for="password">Contraseña:</label>
                            <input id="password" type="password" name="contrasena" placeholder="Ingresa tu contraseña" title="Minimum 6 characters at least 1 Alphabet and 1 Number" required>
                            <img alt="Password Icon" title="Password Icon"src="assets/password.svg">
                        </div>
                        
                        <button type="submit" class="my-form__button">Iniciar Sesión</button>
                        
                        <div class="my-form__actions">
                            <div class="my-form__row"><a href="#">Olvidaste tu contraseña?</a>
                                <a href="index.php?accion=volverI">Volver al inicio</a></div>
                            <div class="my-form__signup">
                                <a href="index.php?accion=crearCuenta">Crear cuenta nueva</a></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="info-side">
                <img src="assets/mock.png" alt="Mock" class="mockup">
                <div class="welcome-message">
                    <h2>Bienvenido al del Colegio Hispanoamericano! 👋</h2>
                    <p>¡Forjando mentes brillantes, un estudiante a la vez!</p>    
                </div>
            </div>
        </div>
        <?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
