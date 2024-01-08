<?php
/* Smarty version 4.3.4, created on 2023-12-18 11:48:43
  from 'C:\xampp\htdocs\proyectoBVT\view\templates\contenido\contactenos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6580238b9de073_45236852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6123ca60101e1d11f35f692614a781460cd9e6bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoBVT\\view\\templates\\contenido\\contactenos.tpl',
      1 => 1702890940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6580238b9de073_45236852 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .contenedorForm {
        padding: 60px;
        margin: 50px 15px -30px 15px;
        background-color: #ffffff96;
        border-radius: 6px;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }

    #posicion {
        display: flex;
    }

    .blocku {
        flex: 1;
        padding: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #form-block {
        margin-left: 5px;
        padding: 35px;
        border: 3px solid #ccc;
        border-radius: 25px;
    }

    input[type=text],
    input[type=email],
    textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        margin-top: 4px;
        margin-bottom: 10px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #387385c2;
        color: #fff;
        padding: 1.2rem 3rem;
        border-radius: 0.5rem;
        text-decoration: none;
        font-weight: 700;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
    }

    input[type=submit]:hover {
        background-color: #abe6f848;
        color: #000000;
        font-weight: 700;
    }

    #inst3 {
        margin: 25px;
        text-align: center;
        color: #005780;
    }

    #inst3 p {
        color: black;
    }
</style>
<div class="contenedorForm">
    <div id="posicion">
        <div class="blocku">
            <img src="img/hombre.jpg" alt="Logo" style="height: 650px; width:99%; border-radius:20px">
        </div>
        <div id="form-block" class="blocku">
            <form action="#" method="#">
                <header id="inst3">
                    <h1>Formulario de Contacto</h1>
                    <p>¡Encuentra todo lo que necesitas para tu éxito académico!</p>
                </header>
                <label for="fname">Nombre</label>
                <input type="text" id="fname" name="fname" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Mensaje</label>
                <textarea id="message" name="message" rows="4" cols="50" maxlength="150" required></textarea>

                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</div><?php }
}
