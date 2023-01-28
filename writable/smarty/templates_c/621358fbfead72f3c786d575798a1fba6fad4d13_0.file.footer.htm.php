<?php
/* Smarty version 4.3.0, created on 2023-01-28 12:23:08
  from '/data/projects/hadi/ci-smarty/app/Views/footer.htm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d513ac95cc57_70733729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '621358fbfead72f3c786d575798a1fba6fad4d13' => 
    array (
      0 => '/data/projects/hadi/ci-smarty/app/Views/footer.htm',
      1 => 1674908586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d513ac95cc57_70733729 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <footer class="mt-auto text-white-50">
    <div class="pb-3 small">
      <div>Page rendered in {elapsed_time} seconds</div>
      <div>Environment: <?php echo ENVIRONMENT;?>
</div>
    </div>

    <div>
      <div>Developed by <a href="https://github.com/hadipramono" class="text-white">Hadi Pramono</a></div>
      <div class="small">Powered by: <a href="https://codeigniter.com/" class="text-white" target="_blank">CodeIgniter</a>, <a href="https://www.smarty.net/" class="text-white" target="_blank">Smarty</a>, <a href="https://getbootstrap.com/" class="text-white" target="_blank">Bootstrap</a>, <a href="https://jquery.com/" class="text-white" target="_blank">jQuery</a></div>
    </div>
  </footer>
</div>


<?php echo '<script'; ?>
 src="<?php echo base_url('assets/js/bootstrap.bundle.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url('assets/js/jquery-3.6.3.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  let bootstrap_version = bootstrap.Tooltip.VERSION
  let jquery_version = jQuery.fn.jquery
  $("#bootstrap_version").text(bootstrap_version);
  $("#jquery_version").text(jquery_version);
<?php echo '</script'; ?>
>

  </body>
</html>
<?php }
}
