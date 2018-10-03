<?php /* Smarty version 3.1.27, created on 2018-08-07 01:50:58
         compiled from "C:\xampp\htdocs\facturacion_nuve\styles\templates\overall\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9277743495b68dee2834d31_14620570%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f0897600146950b6262a586d50e3b9b93560af8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\facturacion_nuve\\styles\\templates\\overall\\footer.tpl',
      1 => 1533599456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9277743495b68dee2834d31_14620570',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b68dee285fcc9_49031361',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b68dee285fcc9_49031361')) {
function content_5b68dee285fcc9_49031361 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9277743495b68dee2834d31_14620570';
?>
 <?php echo '<script'; ?>
 src="styles/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="styles/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

  <!-- Custom scripts for this template -->
  <?php echo '<script'; ?>
 src="styles/js/coming-soon.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="styles/css/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
  $('#fe').datepicker(
      
  );
  <?php echo '</script'; ?>
>
   
<?php }
}
?>