<?php
/* Smarty version 4.3.4, created on 2023-11-09 04:20:52
  from 'C:\xampp\htdocs\Programacion2\proyectoBVT\view\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_654c5014b37bc1_64995267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c7396dcc75fc1af7a8dbfff822f4c039a0c244a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Programacion2\\proyectoBVT\\view\\templates\\footer.tpl',
      1 => 1699441407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654c5014b37bc1_64995267 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
        <footer>
            <div class="footer-wrapper">
                <section class="footer-top">
                    <div class="footer-headline">
                        <h2>Suscríbase a nuestro boletín de noticias</h2>
                        <p>
                            Manténgase al día con nuestras noticias y artículos.
                        </p>
                    </div>
                    <div class="footer-subscribe">
                        <input type="email" spellcheck="false" placeholder="Ingresa tu correo">
                        <button>
                            Suscribirse
                        </button>
                    </div>
                </section>
                <div class="footer-columns">
                    <section class="footer-logo">
                        <img src="img/universidad-hispanoamericana-negativo.png" alt='logo' class="logo">
                        <h3>CLGUH</h3>
                    </section>
                    <section>
                        <h3>Funciones</h3>
                        <ul>
                            <li>
                                <a href="index.php?accion=crearCuenta">Registrarse</a>
                            </li>
                            <li>
                                <a href="index.php?accion=iniciar" >Ingresar a tu cuenta</a>
                            </li>
                            <li>
                                <a href="#" >Actualizar datos</a>
                            </li>
                            <li>
                                <a href="#">Solicitudes nuevas</a>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h3>Recursos</h3>
                        <ul>
                            <li>
                                <a href="#">Soporte</a>
                            </li>
                            <li>
                                <a href="#" >Mapa de las instalaciones</a>
                            </li>
                            <li>
                                <a href="#" >Boletín de noticias</a>
                            </li>
                            <li>
                                <a href="#" >Centro de ayuda</a>
                            </li>
                            <li>
                                <a href="#">Suscribete</a>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h3>Companía</h3>
                        <ul>
                            <li>
                                <a href="#">Sobre Nosotros</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Modalidades</a>
                            </li>
                            <li>
                                <a href="#">Administración</a>
                            </li>
                            <li>
                                <a href="#">Contacto</a>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h3>Terminos y condiciones</h3>
                        <ul>
                            <li>
                                <a href="#" >Privacidad</a>
                            </li>
                            <li>
                                <a href="#">Cookies</a>
                            </li>
                            <li>
                                <a href="#">Permisos legales</a>
                            </li>
                            <li>
                                <a href="#">Licencias</a>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="footer-bottom">
                    <small>© Colegio Hispanoamericano <span id="year"></span>, Todos los derechos reservados</small>
                    <span class='social-links'>
                        <a href="#" title="Instagram">
                            <img src="assets/instagram.svg" alt='Instagram'>                       
                        </a>
                        <a href="#" title="Linkedin">
                            <img src="assets/linkedin.svg" alt='Linkedin'>
                        </a>
                        <a href="#" title="Twitter">
                            <img src="assets/twitter.svg" alt='Twitter'>
                        </a>
                        <a href="#" title="Youtube">
                            <img src="assets/youtube.svg" alt='YouTube'>
                        </a>
                        <a href="#" title="GitHub" id="git">
                            <img src="assets/github.svg" alt='GitHub'>
                        </a>
                    </span>
                </div>
            </div>
        </footer>
        <?php echo '<script'; ?>
>
            document.getElementById("year").innerHTML = new Date().getFullYear();
        <?php echo '</script'; ?>
>
        
</body><?php }
}
