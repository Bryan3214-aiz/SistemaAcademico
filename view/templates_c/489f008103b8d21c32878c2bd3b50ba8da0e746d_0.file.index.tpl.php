<?php
/* Smarty version 4.3.4, created on 2023-10-26 04:35:24
  from 'C:\xampp\htdocs\miercoles\semana7\view\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6539d06cd20327_02150842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '489f008103b8d21c32878c2bd3b50ba8da0e746d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miercoles\\semana7\\view\\templates\\index.tpl',
      1 => 1698287691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6539d06cd20327_02150842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br><br><br>
<div class="container">

<main class="form-signin w-100 m-auto">
    
    <?php if ($_smarty_tpl->tpl_vars['msg']->value != '') {?>
        <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
    <?php }?>    
    
    <form action="index.php" method="post">
        
    <input type="hidden" name="accion" value="validar_login">   
    
    <img class="mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
        <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="pass" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Recordarme
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
  </form>
</main>


</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
