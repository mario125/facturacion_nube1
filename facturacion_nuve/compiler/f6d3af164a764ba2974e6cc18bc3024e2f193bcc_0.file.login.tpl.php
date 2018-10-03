<?php /* Smarty version 3.1.27, created on 2018-08-09 00:12:52
         compiled from "C:\xampp\htdocs\facturacion_nuve\styles\templates\public\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5489159485b6b6ae4c1cbf0_89340255%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6d3af164a764ba2974e6cc18bc3024e2f193bcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\facturacion_nuve\\styles\\templates\\public\\login.tpl',
      1 => 1533766370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5489159485b6b6ae4c1cbf0_89340255',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b6b6ae4c47b79_11925993',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b6b6ae4c47b79_11925993')) {
function content_5b6b6ae4c47b79_11925993 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5489159485b6b6ae4c1cbf0_89340255';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <body>

 
 


   <div class="full1">

  </div>
  <br>
     <div class="full">
        <div class="container2">
          
            <div class="grilla1"></div>
            <div class="grilla2">

            <div id="_AJAX_">
            
            </div>
                
               
                  
                <form>
                    <div class="form-group">
                      <label for="inputsm">Tipo de Documento:</label>
                      <select class="form-control input-sm" id="t_doc">
                          <option value="factura">Factura</option>
                          <option value="boleta">Boleta</option>
                          <option value="credito">Nota de crédito</option>
                          <option value="debito">Nota de débito</option>
                        </select>
                        
                    </div>
                    <div class="form-group">
                      <label for="inputdefault">Nro. Documento</label>
                      <input class="form-control" id="num_doc" placeholder="F001-00" type="text">
                    </div>
                    <div class="form-group">
                      <label for="inputlg">F. Emisión:</label>
                      <input class="form-control input-lg" id="fechar" placeholder="2018-08-12" type="text">
                    </div>
                    <div class="form-group">
                        <label for="inputlg">Total:</label>
                        <input class="form-control input-lg" id="monto" placeholder="200.00" type="text" required>
                    </div>
                    <div class="form-group">
                      
                        
                      <button type="button" style="setvisible:none" class="btn bot form-control input-lg" id="buscar"data-target=".bd-example-modal-lg">Buscar</button>
                        
                      </div>
                  </form>
            </div>
            <div class="grilla3"></div>           
        </div>
        <div class="container">
          <div class="content">
          
          </div>
          <div class="sidebar">
          
          </div>
        </div>
      </div>



  <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <?php echo '<script'; ?>
>
  window.onload=function(){
    document.getElementById('buscar').onclick=function(){
      var connect,tipo_doc,numero_doc,fecha,total,form,result;
        tipo_doc=document.getElementById('t_doc').value;
        numero_doc=document.getElementById('num_doc').value;
        fecha=document.getElementById('fechar').value;
        total=document.getElementById('monto').value;
        form='tipo_doc='+tipo_doc+'&numero_doc='+numero_doc+'&fecha='+fecha+'&total='+total;


        connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');
       alert(form);




       if(tipo_doc!=''&&numero_doc!=''&&fecha!=''&&total!='')
        {
                      alert("CORRECTO");
        }
        else
        {
           alert("umm roor");
             result='<div class="alert alert-success" role="alert"> Error, faltan datos</div>';
             document.getElementById('_AJAX_').innerHTML=result;
        }












































    }
  }



  <?php echo '</script'; ?>
>



  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body">
            <p>Some text in the modal.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
  </div>
</div>

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
  $('#fechar').datepicker(
      
  );
  <?php echo '</script'; ?>
>

</body>
  </html>
<?php }
}
?>