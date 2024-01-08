<?php
/* Smarty version 4.3.4, created on 2023-12-21 23:38:03
  from 'C:\xampp\htdocs\proyectoBVT\view\templates\contenido\configuracion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6584be4b5abdb7_95663505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '027a110e481f6097e4c8d8dbf09b920a7695cb7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoBVT\\view\\templates\\contenido\\configuracion.tpl',
      1 => 1703195484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6584be4b5abdb7_95663505 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    #est {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 60vh;
    }

    .user-info {
        max-width: 600px;
        margin: 0 auto;
        padding: 50px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .user-info label {
        font-weight: bold;
        display: block;
        margin-top: 20px;
    }

    .user-info input,
    .user-info select {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        margin-top: 5px;
    }

    .user-info input[type="submit"] {
        margin-top: 15px;
        background-color: #387385c2;
        color: #fff;
        padding: 1.2rem 3rem;
        border-radius: 0.5rem;
        text-decoration: none;
        font-weight: 700;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
    }

    .user-info input[type="submit"]:hover {
        background-color: #abe6f848;
        color: #000000;
        font-weight: 700;
    }
</style>

<body>
    <div id="est">
        <div class="user-info">
            <h1 id="title">Actualizar Información Personal</h1>
            <form action="index.php?action=editarUsuario" method="post">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username">
                <label for="email">Correo:</label>
                <input type="email" id="email" name="email">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password">
                <input type="submit">
            </form>
        </div>
    </div>
</body><?php }
}
