<?php
/* Smarty version 4.3.4, created on 2023-11-09 04:55:22
  from 'C:\xampp\htdocs\Programacion2\proyectoBVT\view\templates\crearCuenta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_654c582a2d46c0_55886392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89b26daf920cdb5e5e8a9af71eb7e741934cb483' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Programacion2\\proyectoBVT\\view\\templates\\crearCuenta.tpl',
      1 => 1699486201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654c582a2d46c0_55886392 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Sistema Academico - Crear cuenta</title>
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
                        <p>¡Registra tus datos!</p>
                    </div>
                    <form action="index.php" method="post" class="my-form">
                        <input type="hidden" name="accion" value="crear_usuario">   
                        <div class="text-field">
                            <label for="nom">Nombre:</label>
                            <input type="text" id="nom" name="nombre" placeholder="Ingresa tu nombre" required><img alt="Email Icon" src="img/OIP.jpg">
                        </div>
                        <div class="text-field">
                            <label for="email">Correo:</label>
                            <input type="email" id="email" name="correo" placeholder="Ingresa tu correo"required><img alt="Email Icon"src="assets/email.svg">
                        </div>
                        <div class="text-field">
                            <label for="password">Contraseña:</label>
                            <input id="password" type="password" name="contraseña" placeholder="Ingresa tu contraseña"title="Minimum 6 characters at least 1 Alphabet and 1 Number"required><img alt="Password Icon" src="assets/password.svg">
                        </div>
                        <button type="submit" class="my-form__button">Crear Cuenta</button>
                        <div class="my-form__actions">
                            <div class="my-form__row">
                                <span>Ver más funciones</span>
                                <a href="index.php?accion=volverI">Volver al inicio</a> 
                            </div>
                            <div class="my-form__signup">
                                <a href="index.php?accion=iniciar">Iniciar Sesión</a>
                            </div>                            
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
