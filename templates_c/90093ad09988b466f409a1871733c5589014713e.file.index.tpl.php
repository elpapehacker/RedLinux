<?php /* Smarty version Smarty-3.1.14, created on 2013-09-12 16:50:48
         compiled from "templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19871581915230ee6adaf723-88650490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90093ad09988b466f409a1871733c5589014713e' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1379020841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19871581915230ee6adaf723-88650490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5230ee6b5d0f30_65981226',
  'variables' => 
  array (
    'title' => 0,
    'slogan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5230ee6b5d0f30_65981226')) {function content_5230ee6b5d0f30_65981226($_smarty_tpl) {?>

<html lang="en_US">

	<!-- Head Init -->

	<head>
		<meta charset="utf-8">
		<!-- Title Init -->

		<title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['slogan']->value;?>
 </title>

		<!-- Title Finish -->

		<!-- CSS Init -->

		<link rel="stylesheet" type="text/css" href="css/index.css">

		<!-- CSS Finish -->

		<!-- JS Init -->
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<!-- JS Finsh -->

	</head>

	<!-- Header Finish -->


	<!-- Body Init -->

	<body>

		<!-- Header Init -->
		<div id="green">
		</div>
		<div id="blue"></div>
		<div id="orange"></div>
		<div id="pink"></div>
		<div id="purple"></div>
		<div id="blue2"></div>
		<header>
			<div style="clear:both;"></div>

			<!-- Logo Init -->

			<div id="logo">

				<h1> <a href="/" id="title-a"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a> </h1>

			</div>

			<!-- logo Finish -->

		</header>

		<!-- Header Finish -->

		<div id="menu">
			<nav id="nav">
				<ul id="ul">
					<li class="li"><a href="users/login.php">Login</a></li>
					<li class="li"><a href="users/register.php">Register</a></li>
				</ul>
			</nav>
		</div>

		<!-- Wrap Init-->

		<div id="wrap">
			<p>
				Click on a bar color :>
			</p>
			<p>
				Proximamente en las barras de colores se abriran una especies de dialogos....
			</p>
		</div>

		<!-- Wrap Finish-->

	</body>

	<!-- Body Finish -->

</html><?php }} ?>