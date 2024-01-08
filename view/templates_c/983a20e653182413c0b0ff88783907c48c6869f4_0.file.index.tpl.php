<?php
/* Smarty version 4.3.4, created on 2023-11-02 02:01:35
  from 'C:\xampp\htdocs\miercoles\semana8\view\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6542f4efb42268_44780215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '983a20e653182413c0b0ff88783907c48c6869f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\miercoles\\semana8\\view\\templates\\index.tpl',
      1 => 1698886891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6542f4efb42268_44780215 (Smarty_Internal_Template $_smarty_tpl) {
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
    
    
    <!-- Button trigger modal -->
    <br>
    <br>   
   
    <button type="button" class="btn btn-primary w-100 py-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Abrir Area de Registro
    </button>
    
    
    
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
  </form>
</main>


    


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <form action="index.php" method="post">
      <input type="hidden" name="accion" value="crear_usuario">   
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrar Nuevo Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          
    <div class="form-floating">
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese su Nombre" required>
      <label for="floatingInput">Nombre</label>
    </div>
    <br>
          
    <div class="form-floating">
        <input type="text" class="form-control" name="ap1" placeholder="Ingrese su Apellido 1" required>
      <label for="floatingInput">Apellido 1</label>
    </div>
    <br>
    <div class="form-floating">
        <input type="text" class="form-control" name="ap2" placeholder="Ingrese su Apellido 2" required>
      <label for="floatingInput">Apellido 2</label>
    </div>
    <br>
 
   <div class="form-floating">
        <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="pass" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>    
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Crear</button>
      </div>
        
      </form>
    </div>
  </div>
</div>    
    
    
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
