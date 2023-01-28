<?php
/* Smarty version 4.3.0, created on 2023-01-28 12:32:21
  from '/data/projects/hadi/ci-smarty/app/Views/header.htm' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d515d5791e85_02225055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73d1ecdf366bf562e38b359f84bc36c14b55e40d' => 
    array (
      0 => '/data/projects/hadi/ci-smarty/app/Views/header.htm',
      1 => 1674909140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d515d5791e85_02225055 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Hadi Pramono :: github.com/hadipramono">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>
" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/cover.css');?>
" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">SmartCI</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
        <a class="nav-link fw-bold py-1 px-0" href="#">Features</a>
        <a class="nav-link fw-bold py-1 px-0" href="https://github.com/hadipramono">Contact</a>
      </nav>
    </div>
  </header>
<?php }
}
