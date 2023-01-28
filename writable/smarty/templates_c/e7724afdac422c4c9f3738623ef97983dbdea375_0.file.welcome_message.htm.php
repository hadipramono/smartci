<?php
/* Smarty version 4.3.0, created on 2023-01-28 12:29:12
  from '/data/projects/hadi/ci-smarty/app/Views/welcome_message.htm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d51518da1488_65080560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7724afdac422c4c9f3738623ef97983dbdea375' => 
    array (
      0 => '/data/projects/hadi/ci-smarty/app/Views/welcome_message.htm',
      1 => 1674908950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.htm' => 1,
    'file:footer.htm' => 1,
  ),
),false)) {
function content_63d51518da1488_65080560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <main class="px-3">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <p class="lead">
      The smart framework with powerful features: 
      <ul>
        <li>CodeIgniter <span id="codeigniter_version"><?php echo CodeIgniter\CodeIgniter::CI_VERSION;?>
</span> + Smarty <span class="smarty_version"><?php echo Smarty::SMARTY_VERSION;?>
</span></li>
        <li>Bootstrap <span id="bootstrap_version"></span> + jQuery <span id="jquery_version"></span></li>
      </ul>
    </p>

    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
    </p>
  </main>

<?php $_smarty_tpl->_subTemplateRender("file:footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
