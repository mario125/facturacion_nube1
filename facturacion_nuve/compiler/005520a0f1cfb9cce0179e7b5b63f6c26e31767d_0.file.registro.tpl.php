<?php /* Smarty version 3.1.27, created on 2017-01-03 03:18:19
         compiled from "C:\xampp\htdocs\apurimac\styles\templates\public\registro.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10420586b09eb4f8809_04371618%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '005520a0f1cfb9cce0179e7b5b63f6c26e31767d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\apurimac\\styles\\templates\\public\\registro.tpl',
      1 => 1483407944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10420586b09eb4f8809_04371618',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_586b09eb5764d5_21710474',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_586b09eb5764d5_21710474')) {
function content_586b09eb5764d5_21710474 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10420586b09eb4f8809_04371618';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <body>

  <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <div class=" col S12">
<div class="row">
   <div class="col s12 col m8 push-m2  col l6 push-l3">
     <center>
        <h3>REGISTRAR</h3>
      </center>
     <div class="card-panel white z-depth-5">
       <div class="row">
     <div class="col s12">
       <div class="row">
         <div id="_AJAX_" class="input-field col s12">


          </div>

       </div>

       <div class="row">
         <div class="input-field col s6">
           <input  id="nombres" type="text" class="validate">
           <label for="first_name">NOMBRES</label>
         </div>

         <div class="input-field col s6">
           <input id="apellidos" type="text" class="validate">
           <label for="last_name">APELLIDOS</label>
         </div>
       </div>

       <div class="row">

         <div class="input-field col s6 " >
                    <select class="icons" id="sexo">
                        <option value="0" disabled selected></option>
                        <option value="M" data-icon="styles/galeria/m.png" class="circle">M</option>
                        <option value="F" data-icon="styles/galeria/f.png" class="circle">F</option>

                    </select>
                    <label> SEXO</label>
          </div>

          <div class="input-field col s6 " >
                   <select class="icons" id="cargo">
                   <option value="0" disabled selected></option>
                   <option value="1" data-icon="styles/galeria/admin.png" class="circle">ADMINISTRADOR</option>
                   <option value="2" data-icon="styles/galeria/user.png" class="circle">USUARIO</option>

                   </select>
                   <label> CARGO</label>
        </div>

       </div>


       <div class="row">
         <div class="input-field col s6">
                    <input id="usuario" type="text" class="validate" >
                    <label for="first-name">USUARIO</label>
          </div>
         <div class="input-field col s6 " >
                <select class="icons" id="password">
                <option value="0" disabled selected></option>
                <option value="1" data-icon="styles/galeria/f.png" class="circle">*****************</option>
                <option value="2" data-icon="styles/galeria/m.png" class="circle">*****************</option>
                <option value="3" data-icon="styles/galeria/m2.png" class="circle">*****************</option>
                <option value="4" data-icon="styles/galeria/f2.png" class="circle">*****************</option>
                </select>
                <label> CONTRASEÑA</label>
          </div>
       </div>

       <div class="row">
         <div class="col s12">

               <button id="submitBtn" class="btn waves-effect waves-light" type="submit" name="action">REGISTRAR</button>
      </div>
     </div>




     </div>
   </div>


     </div>
   </div>
</div>
</div>

  <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



  <?php echo '<script'; ?>
>
  window.onload=function(){
    document.getElementById('submitBtn').onclick=function(){
      var connect,nombres,apellidos,sexo,cargo,nick,password,form,result;
        nombres=document.getElementById('nombres').value;
        apellidos=document.getElementById('apellidos').value;
        sexo=document.getElementById('sexo').value;
        cargo=document.getElementById('cargo').value;
        nick=document.getElementById('usuario').value;
        password=document.getElementById('password').value;

        form='nombres='+nombres+'&apellidos='+apellidos +'&sexo='+sexo+'&cargo='+cargo+'&nick='+nick+'&password='+password;


        connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');
       //alert(nombres+apellidos+sexo+cargo+usuario+password);

        if(nombres!=''&&apellidos!=''&&sexo!=''&&cargo!=''&&nick!=''&&password!='')
        {
            connect.onreadystatechange =function(){
            if(connect.readyState==4&&connect.status==200){
              //  alert(connect.responseText);
                if(parseInt(connect.responseText) ==1){

                    //conecatado con exito
                    //redireccione
                    result='<div class="card-panel blue white-text">REGISTRANDO..  !! </div>';
                    location.href= '?view=admin';
                    document.getElementById('_AJAX_').innerHTML=result;


                }else if (parseInt(connect.responseText)==2) {
                  result='<div class="card-panel red white-text">EL  NOMBRE Y APELLIDOS YA EXISTEN..  !! </div>';
                  document.getElementById('_AJAX_').innerHTML=result;

                }else if (parseInt(connect.responseText)==3) {
                  result='<div class="card-panel red white-text">AL USUARIO YA EXISTE..  !! </div>';
                  document.getElementById('_AJAX_').innerHTML=result;

                }else{
                   //    error
                   result='<div class="card-panel red white-text"> LOS DATOS  YA EXISTEN...!! </div>';
                   document.getElementById('_AJAX_').innerHTML=result;
                  }

            }else if(connect.readyState!=4){
                //procesando....
              result='<div class="card-panel amber white-text">PROCESANDO..  !! </div>';
               document.getElementById('_AJAX_').innerHTML=result;
              }
        }

        connect.open('POST','?view=registro',true);
        connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        connect.send(form);
        }
        else
        {
          result='<div class="card-panel red white-text">ERROR.. Faltan datos !! </div>';
         document.getElementById('_AJAX_').innerHTML=result;

        }


    }
  }



  <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
?>