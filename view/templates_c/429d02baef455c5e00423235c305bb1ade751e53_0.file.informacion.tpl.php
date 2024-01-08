<?php
/* Smarty version 4.3.4, created on 2023-11-27 18:41:06
  from 'C:\xampp\htdocs\proyectoBVT\view\templates\informacion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6564d4b2cd4e92_07081077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '429d02baef455c5e00423235c305bb1ade751e53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoBVT\\view\\templates\\informacion.tpl',
      1 => 1701105404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6564d4b2cd4e92_07081077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
        <div class="profile-wrapper">
            <div class="profile">
                <div class="profile-image">
                    <img
                        src="Imagenes/Bryan2.jpg"
                        alt="Profile" class="auto-style4">
                </div>
                <div class="profile-name">
                    <h2>Bryan Leiva Mejia</h2>
                    <div class="profile-bio">
                        Soy estudiante de ingenieria informatica, profe ponganos un 100 &#128591.
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-wrapper">
            <div class="profile">
                <div class="profile-image">
                    <img
                        src="Imagenes/Valeria.jpg"
                        alt="Profile" class="auto-style4">
                </div>
                <div class="profile-name">
                    <h2>Nadtring Ugalde Castro</h2>
                    <div class="profile-bio">
                        Soy estudiante de ingenieria informatica.
                    </div>
                </div>
            </div>
       </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
