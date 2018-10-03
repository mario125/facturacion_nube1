<?php /* Smarty version 3.1.27, created on 2018-08-08 23:17:04
         compiled from "C:\xampp\htdocs\facturacion_nuve\styles\templates\home\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8063386055b6b5dd0855ea4_56807095%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c669253c78f9c36dd677947be6867d678b416e03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\facturacion_nuve\\styles\\templates\\home\\index.tpl',
      1 => 1533763023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8063386055b6b5dd0855ea4_56807095',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b6b5dd08c7336_52171716',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b6b5dd08c7336_52171716')) {
function content_5b6b5dd08c7336_52171716 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8063386055b6b5dd0855ea4_56807095';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <body>

 




    <div class="overlay">
        <div class="row">
            
            <div class="col-md-4 mensaje" style="">
                <div>
                  <div class="imagen">
                    <img  class="img_fac" src="img/fac.png" alt="100" >
                  </div>
                 <br>

                  <div class="texto" style="margin-top: -25px;">
                    <center><strong style="font-family: 'Oswald', sans-serif; font-weight: 150;font-size: 1.6rem; ">Facturación Electrónica para su empresa</strong></center>
                    
                     <br><br>
                     <center>llamenos</center>
                    
                  </div>

                </div>  
            </div>
        </div>
    </div>
    
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="mp4/bg.mp4" type="video/mp4">
        
    </video>

    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">

        
    


        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
            <div class="titulo">
             <div class="titulo1">
             <p class="mb-3" style="font-family: 'Oswald', sans-serif;font-size: 80px; ">Facturación </p>
            </div>
             <div class="titulo2" style="	margin-left: 170px; margin-top:-40px;">
             <p class="mb-3" style="font-family: 'Oswald', sans-serif;font-size: 80px; color:#EB892C ">Electrónica </p>
            </div>
            </div>

              
                        


              <div class="input-group input-group-newsletter">
               <div class="input-group-append">
                  <button class="btn btn-secondary" id="x_fac" type="button">Busqueda por factura</button> <br>                 
                </div>

              </div>
              <div class="input-group input-group-newsletter">
                <div class="input-group-append">
                   <button class="btn btn-secondary" type="button">Busqueda por Usuario</button> <br>                 
                 </div> 
               </div>

                
              

              


            </div>
            <br>
            <br>
                 
          </div>
        </div>
      </div>
      
    </div>
    
    <div class="social-icons">
      
      <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fa fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>




<?php echo '<script'; ?>
>
  window.onload=function(){
    document.getElementById('x_fac').onclick=function(){
      location.href= '?view=login';
     //alert("hola tio")
    }
  }
  <?php echo '</script'; ?>
>


  <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



  </body>
</html>
<?php }
}
?>