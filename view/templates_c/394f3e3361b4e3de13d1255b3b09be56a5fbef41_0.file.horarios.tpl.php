<?php
/* Smarty version 4.3.4, created on 2023-12-21 00:33:30
  from 'C:\xampp\htdocs\proyectoBVT\view\templates\contenido\horarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_658379ca8b1dc5_57039060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '394f3e3361b4e3de13d1255b3b09be56a5fbef41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoBVT\\view\\templates\\contenido\\horarios.tpl',
      1 => 1703115207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658379ca8b1dc5_57039060 (Smarty_Internal_Template $_smarty_tpl) {
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
            padding: 12px;
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
            <h1>Horarios de Clases</h1>
        </div>
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Profesor</th>
                        <th>Curso</th>
                        <th>Dia</th>
                        <th>Horarios</th>
                    </tr>
                </thead>
                <?php
$__section_horario_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr_horario']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_horario_0_total = $__section_horario_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_horario'] = new Smarty_Variable(array());
if ($__section_horario_0_total !== 0) {
for ($__section_horario_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_horario']->value['index'] = 0; $__section_horario_0_iteration <= $__section_horario_0_total; $__section_horario_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_horario']->value['index']++){
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr_horario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_horario']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_horario']->value['index'] : null)]['profesor'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr_horario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_horario']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_horario']->value['index'] : null)]['curso'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr_horario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_horario']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_horario']->value['index'] : null)]['dia'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr_horario']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_horario']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_horario']->value['index'] : null)]['horario'];?>
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
