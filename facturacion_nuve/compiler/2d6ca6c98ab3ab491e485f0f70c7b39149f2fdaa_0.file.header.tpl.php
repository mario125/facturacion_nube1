<?php /* Smarty version 3.1.27, created on 2018-08-08 16:35:27
         compiled from "C:\xampp\htdocs\facturacion_nuve\styles\templates\overall\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7709443585b6affaf0463e0_24351868%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d6ca6c98ab3ab491e485f0f70c7b39149f2fdaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\facturacion_nuve\\styles\\templates\\overall\\header.tpl',
      1 => 1533738916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7709443585b6affaf0463e0_24351868',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b6affaf04a269_65938988',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b6affaf04a269_65938988')) {
function content_5b6affaf04a269_65938988 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7709443585b6affaf0463e0_24351868';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   


    


       <!-- Bootstrap core CSS -->
   <link href="styles/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="styles/css/coming-soon.css" rel="stylesheet">
   <link href="styles/css/datepicker.css" rel="stylesheet">

   
  <link rel="stylesheet" href="styles/css/styles.css">




    <link href="styles/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">



       <style>
    .mensaje{
      margin-top: 20%;
      border-radius: 5px;
      position: fixed;right: 0;
      z-index:9;
      background-color: rgb(250, 129, 16);
      

    }
    .texto{
      color: aliceblue;
    }
    .img_fac{
      margin-top: -200px;
      height: 250px;
      width: 260px;
      margin-left: auto;
      margin-right: auto;
      display: block;

    }

    @media screen and (max-width:640px) {
    .mensaje{
    background-color:rgb(250, 129, 16);
    margin-top: 100%;
    bottom: 0px;
    }
    .img_fac{
      margin-top: -100px;
     

    }
    .mensaje{
     margin-top: 2000px;
      border-radius: 5px;
     
      z-index:9;
      background-color: rgb(250, 129, 16);
    }
    }
    </style>



  </head>
<?php }
}
?>