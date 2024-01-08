<?php
/* Smarty version 4.3.4, created on 2023-12-22 04:42:28
  from 'C:\xampp\htdocs\proyectoBVT\view\templates\contenido\profesor\listaProfesores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_658505a4b6b980_55846047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e86cec20184c7dbd1fa449d791be2ac4da022193' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoBVT\\view\\templates\\contenido\\profesor\\listaProfesores.tpl',
      1 => 1703216540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658505a4b6b980_55846047 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 60px;
            width: 95%;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.253);
            border-radius: 10px;
            overflow: hidden;
        }

        .header {
            background-color: #669fb1;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .header h1 {
            font-size: 36px;
            margin: 0;
        }

        .table-container {
            padding: 0 20px;
            max-height: 700px;
            overflow-y: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: left;
        }

        th {
            position: sticky;
            top: 0;
            z-index: 1;
            background-color: #669fb1f6;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Lista de Profesores</h1>
        </div>
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Cedula</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Nivel Estudio</th>
                    </tr>
                </thead>
                <?php
$__section_profesor_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr_profesor']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_profesor_0_total = $__section_profesor_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_profesor'] = new Smarty_Variable(array());
if ($__section_profesor_0_total !== 0) {
for ($__section_profesor_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_profesor']->value['index'] = 0; $__section_profesor_0_iteration <= $__section_profesor_0_total; $__section_profesor_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_profesor']->value['index']++){
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr_profesor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_profesor']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_profesor']->value['index'] : null)]['nombre'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr_profesor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_profesor']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_profesor']->value['index'] : null)]['direccion'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr_profesor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_profesor']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_profesor']->value['index'] : null)]['cedula'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr_profesor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_profesor']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_profesor']->value['index'] : null)]['telefono'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr_profesor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_profesor']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_profesor']->value['index'] : null)]['correo'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr_profesor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_profesor']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_profesor']->value['index'] : null)]['nivel_est'];?>
</td>
                    </tr>
                <?php
}
}
?>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS (opcional, si se requieren funcionalidades de Bootstrap) -->
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body><?php }
}
