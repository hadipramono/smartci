<?php
/* Smarty version 4.3.0, created on 2023-01-28 10:45:53
  from '/data/projects/hadi/ci-smarty/app/Views/welcome_message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d4fce1cf7ed1_74173277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3b3e56e23925174dfac8e32dc4e8f1b7f4aca6f' => 
    array (
      0 => '/data/projects/hadi/ci-smarty/app/Views/welcome_message.tpl',
      1 => 1674902751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d4fce1cf7ed1_74173277 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Cover Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">

    

    

    <link href="<?php echo '<?'; ?>
= base_url('assets/css/bootstrap.min.css') <?php echo '?>'; ?>
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
    <link href="<?php echo '<?'; ?>
= base_url('assets/css/cover.css') <?php echo '?>'; ?>
" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Cover</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
        <a class="nav-link fw-bold py-1 px-0" href="#">Features</a>
        <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Welcome to CI-Smarty</h1>
    <h3>CodeIgniter <?php echo '<?'; ?>
= CodeIgniter\CodeIgniter::CI_VERSION <?php echo '?>'; ?>
 + Bootstrap <span id="bootstrap_version"></span></h3>
    <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
  </footer>
</div>


<?php echo '<script'; ?>
 src="<?php echo '<?'; ?>
= base_url('assets/js/bootstrap.bundle.min.js')<?php echo '?>'; ?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo '<?'; ?>
= base_url('assets/js/jquery-3.6.3.min.js')<?php echo '?>'; ?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  let version = bootstrap.Tooltip.VERSION
  $("#bootstrap_version").text(version);
<?php echo '</script'; ?>
>

  </body>
</html>
<?php }
}
