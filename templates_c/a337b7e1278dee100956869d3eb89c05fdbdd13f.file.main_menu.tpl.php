<?php /* Smarty version Smarty-3.0.8, created on 2015-10-05 07:05:22
         compiled from "/home/antriksh/public_html/zendto/templates/main_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177786013556125972892a50-59405106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a337b7e1278dee100956869d3eb89c05fdbdd13f' => 
    array (
      0 => '/home/antriksh/public_html/zendto/templates/main_menu.tpl',
      1 => 1337365114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177786013556125972892a50-59405106',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('isAuthorizedUser')->value){?>
  <!-- User has logged in -->
<table border="0" class="homeButtons">
  <tr>
    <td colspan="2">&nbsp;<!-- <?php echo $_smarty_tpl->getVariable('isLocalIP')->value;?>
 --></td>
  </tr>
  <tr>
    <td colspan="2"><h4>You may perform the following activities:</h4></td>
  </tr>
  <tr>
    <td><?php smarty_template_function_button($_smarty_tpl,array('href'=>"verify.php",'text'=>"Drop-off",'width'=>"100%"));?>
</td>
    <td class="UD_nav_label">Drop-off (<i>upload</i>) a file for someone else.</td>
  </tr>
  <tr>
    <td><?php smarty_template_function_button($_smarty_tpl,array('href'=>"pickup.php",'text'=>"Pick-up",'width'=>"100%"));?>
</td>
    <td class="UD_nav_label">Pick-up (<i>download</i>) a file dropped-off for you.</td>
  </tr>
  <tr><td colspan="2">&nbsp;</td></tr>
  <tr>
    <td><?php smarty_template_function_button($_smarty_tpl,array('href'=>"req.php",'text'=>"Request a Drop-off",'width'=>"100%"));?>
</td>
    <td class="UD_nav_label">Ask another person to send you some files.</td>
  </tr>
<?php if ($_smarty_tpl->getVariable('isStatsUser')->value){?>
	<tr><td colspan="2">&nbsp;</td></tr>
<?php }?>
<?php if ($_smarty_tpl->getVariable('isAdminUser')->value){?>
  <tr>
    <td><?php smarty_template_function_button($_smarty_tpl,array('href'=>"pickup_list_all.php",'text'=>"Show All Drop-offs",'width'=>"100%",'admin'=>$_smarty_tpl->getVariable('isAdminUser')->value));?>
</td>
    <td class="UD_nav_label">View all drop-offs in the database (<i>Administrators only</i>).</td>
  </tr>
  <tr>
    <td><?php smarty_template_function_button($_smarty_tpl,array('href'=>"unlock.php",'text'=>"Unlock Users",'width'=>"100%",'admin'=>$_smarty_tpl->getVariable('isAdminUser')->value));?>
</td>
    <td class="UD_nav_label">Unlock locked-out users (<i>Administrators only</i>).</td>
  </tr>
<?php }?>
<?php if ($_smarty_tpl->getVariable('isStatsUser')->value){?>
  <tr>
    <td><?php smarty_template_function_button($_smarty_tpl,array('href'=>"stats.php",'text'=>"System Statistics",'width'=>"100%",'admin'=>$_smarty_tpl->getVariable('isStatsUser')->value));?>
</td>
    <td class="UD_nav_label">View daily statistics for the dropbox (<i>Administrators only</i>).</td>
  </tr>
<?php }?>
<?php if ($_smarty_tpl->getVariable('isAdminUser')->value){?>
  <tr>
    <td><?php smarty_template_function_button($_smarty_tpl,array('href'=>"log.php",'text'=>"System Log",'width'=>"100%",'admin'=>$_smarty_tpl->getVariable('isAdminUser')->value));?>
</td>
    <td class="UD_nav_label">View log file (<i>Administrators only</i>).</td>
  </tr>
<?php }?>

  <tr><td colspan="2">&nbsp;</td></tr>
</table>

<?php }else{ ?>
  <!-- Not logged in. -->
<table border="0" class="homeButtons">
  <tr><td colspan="2"><h4>If you are <?php echo $_smarty_tpl->getConfigVariable('LocalUser');?>
, you may login here:</h4></td></tr>
  <tr>
    <td><?php smarty_template_function_button($_smarty_tpl,array('href'=>"index.php?action=login",'text'=>"Login",'width'=>"100%"));?>
</td>
    <td class="UD_nav_label"><b>Avoid having to verify your email address</b>,<br />and drop-off files to <?php echo $_smarty_tpl->getConfigVariable('NonLocalUsers');?>
.</td>
  </tr>
  <tr><td colspan="2">&nbsp;</td></tr>
  <tr><td colspan="2"><h4>Anyone may perform the following activities:</h4></td></tr>
  <tr>
    <td><?php smarty_template_function_button($_smarty_tpl,array('href'=>"verify.php",'text'=>"Drop-off",'width'=>"100%"));?>
</td>
    <td class="UD_nav_label">Drop-off (<i>upload</i>) a file for <?php echo $_smarty_tpl->getConfigVariable('LocalUser');?>
 (<b>email verification required</b>).</td>
  </tr>
  <tr>
    <td><?php smarty_template_function_button($_smarty_tpl,array('href'=>"pickup.php",'text'=>"Pick-up",'width'=>"100%"));?>
</td>
    <td class="UD_nav_label">Pick-up (<i>download</i>) a file dropped-off for you.</td>
  </tr>
  <tr><td colspan="2">&nbsp;</td></tr>
</table>

<?php }?>

<h4>Help</h4>

<p><?php echo $_smarty_tpl->getConfigVariable('ServiceTitle');?>
 is a service to make it easy for you to move files, including large files up to <?php echo $_smarty_tpl->getVariable('maxFileSize')->value;?>
, in and out of <?php echo $_smarty_tpl->getConfigVariable('OrganizationType');?>
.</p>
<ul>
  <li>If you are a member of <?php echo $_smarty_tpl->getConfigVariable('OrganizationType');?>
, you can log in with your <?php echo $_smarty_tpl->getConfigVariable('Username');?>
 and password and send files to anyone, in or out of <?php echo $_smarty_tpl->getConfigVariable('OrganizationType');?>
.<br/>Start by logging in and then clicking the "<em>Drop-off</em>" button.</li>
  <li>If you are not a member of <?php echo $_smarty_tpl->getConfigVariable('OrganizationType');?>
, you cannot log in but you can still send files to people in <?php echo $_smarty_tpl->getConfigVariable('OrganizationType');?>
 if you know their email address.<br/>Start by clicking the "<em>Drop-off</em>" button.</li>
  <li>If you are a member of <?php echo $_smarty_tpl->getConfigVariable('OrganizationType');?>
 and wish to ask someone outside <?php echo $_smarty_tpl->getConfigVariable('OrganizationType');?>
 to send you some files, you can make the process a lot easier for them by logging in and then clicking the "<em>Request a Drop-off</em>" button.<br/>This means the other person does not have to pass any tests to prove who they are, which makes the whole process a lot quicker for them.</li>
  <li>Files are automatically deleted from <?php echo $_smarty_tpl->getConfigVariable('ServiceTitle');?>
 <?php echo $_smarty_tpl->getVariable('keepForDays')->value;?>
 days after you upload them, so you don't need to manually clean up.</li>
</ul>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
