<?php /* Smarty version Smarty-3.0.8, created on 2015-09-19 04:08:11
         compiled from "/home/antriksh/public_html/Zend/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188761170155fd17eb47c746-11602363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b1222ba2bb50135f3fe7ac16b04aaf6696e7b14' => 
    array (
      0 => '/home/antriksh/public_html/Zend/templates/header.tpl',
      1 => 1432665072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188761170155fd17eb47c746-11602363',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php $_template = new Smarty_Internal_Template("functions.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
  <head>
    <title><?php echo $_smarty_tpl->getConfigVariable('ServiceTitle');?>
</title>
    <link rel="stylesheet" type="text/css" href="css/<?php echo $_smarty_tpl->getConfigVariable('CSSTheme');?>
.css"/>
    <link rel="stylesheet" type="text/css" href="css/local.css"/>
    <link rel="stylesheet" type="text/css" href="css/datatables.css"/>
<?php if ($_smarty_tpl->getVariable('autoHome')->value){?>
    <meta http-equiv="refresh" content="10;URL=<?php echo $_smarty_tpl->getVariable('zendToURL')->value;?>
">
<?php }?>

	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
	<script type="text/javascript" src="js/facebox/facebox.js"></script>
        <script type="text/javascript" src="js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="js/jquery.dataTables.datesort.js"></script>
	<link href="js/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript">
		var isLocal = "<?php echo $_smarty_tpl->getVariable('isLocalIP')->value;?>
";
	</script>

<!--[if lte IE 8]>
<link rel="stylesheet" type="text/css" href="css/ie7.css"/>
<![endif]-->
<!-- JKF Created IE9-specific stylesheet without DirectX gradient fills -->
<!--[if gte IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie9.css"/>
<![endif]-->

  </head>

<?php if ($_smarty_tpl->getVariable('focusTarget')->value!=''){?>
<body onload="document.<?php echo $_smarty_tpl->getVariable('focusTarget')->value;?>
.focus();">
<?php }else{ ?>
<body>
<?php }?>

<!--[if lt IE 7]> <div style=' clear: both; height: 59px; padding:0 0 0 0px; position: relative;'> <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="/images/upgradeie6.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->

<!-- Begin page content -->
<div class="content">
	<div id="logo"><a href="<?php echo $_smarty_tpl->getVariable('zendToURL')->value;?>
"><!--<img src="<?php echo $_smarty_tpl->getVariable('padlockImage')->value;?>
" alt="<?php echo $_smarty_tpl->getVariable('padlockImageAlt')->value;?>
"/>--> <?php echo $_smarty_tpl->getConfigVariable('ServiceLogo');?>
</a></div>
	<div id="topMenu">
		<ul>
			<li id="homeLink" class="selected"><a href="<?php echo $_smarty_tpl->getVariable('zendToURL')->value;?>
">Home</a></li>					
		<?php if ($_smarty_tpl->getVariable('isAuthorizedUser')->value){?>
			<li id="inboxLink"><a href="pickup_list.php">Inbox</a></li>
			<li id="outboxLink"><a href="dropoff_list.php">Outbox</a></li>
			<li id="logoutLink"><a href="index.php?action=logout">Logout</a></li>
		<?php }else{ ?>
			<li id="loginLink"><a href="index.php?action=login">Login</a></li>
		<?php }?>			
		</ul>
	</div>
	<div id="container">

<?php if (count($_smarty_tpl->getVariable('errors')->value)>0){?>
	<div id="error">
	    <table class="UD_error" width="50%">
	  <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->getVariable('i')->value<count($_smarty_tpl->getVariable('errors')->value)){ for ($_foo=true;$_smarty_tpl->getVariable('i')->value<count($_smarty_tpl->getVariable('errors')->value); $_smarty_tpl->tpl_vars['i']->value++){
?>
	      <tr>
	        <td valign="middle" rowspan="2"><img src="images/error-icon.png" alt="[error]"/></td>
	        <td class="UD_error_title"><?php echo (($tmp = @$_smarty_tpl->getVariable('errors')->value[$_smarty_tpl->tpl_vars['i']->value]['title'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</td>
	      </tr>
	      <tr>
	        <td class="UD_error_message"><?php echo (($tmp = @$_smarty_tpl->getVariable('errors')->value[$_smarty_tpl->tpl_vars['i']->value]['text'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</td>
	      </tr>
	  <?php }} ?>
	    </table>
  </div>
<?php }?>
