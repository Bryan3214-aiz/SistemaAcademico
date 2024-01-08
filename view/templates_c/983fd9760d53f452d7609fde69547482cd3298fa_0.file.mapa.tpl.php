<?php
/* Smarty version 4.3.4, created on 2023-12-18 11:31:12
  from 'C:\xampp\htdocs\proyectoBVT\view\templates\contenido\mapa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65801f70b7b857_01813794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '983fd9760d53f452d7609fde69547482cd3298fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoBVT\\view\\templates\\contenido\\mapa.tpl',
      1 => 1702853149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65801f70b7b857_01813794 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    #inst {
        text-align: center;
        color: #005780;
    }
    #inst p{
        color: black;
    }

    #map {
        display: flex;
        justify-content: center;
        padding: 2%;
    }

    iframe {
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        max-width: 100%;
        width: 800px;
        height:500px;
    }
</style>

<body>
    <main id="main">
        <header id="inst">
            <h1>Ubicación del Colegio Hispanoamericano</h1>
            <p>¡Encuentra con nosotros todo lo que necesitas para tu éxito académico!</p>
        </header>
        <!-- El div donde se mostrará el mapa de Google -->
        <div id="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.7161535787586!2d-84.07067482467147!3d9.957557590145676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e48d953e3371%3A0x1479123d46f9857e!2sUniversidad%20Hispanoamericana%20%7C%20Llorente!5e0!3m2!1ses-419!2scr!4v1702850170575!5m2!1ses-419!2scr"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </main>
</body>
<?php }
}
