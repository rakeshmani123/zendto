<?php /* Smarty version Smarty-3.0.8, created on 2015-10-05 07:05:54
         compiled from "/home/antriksh/public_html/zendto/templates/verify_sent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2096778968561259924d68d9-98762571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55b9105e0ccba3cbdcad09611b5a4a5fdcfd4367' => 
    array (
      0 => '/home/antriksh/public_html/zendto/templates/verify_sent.tpl',
      1 => 1301540618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2096778968561259924d68d9-98762571',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<p>Now wait for the email message from the <?php echo $_smarty_tpl->getConfigVariable('ServiceTitle');?>

   to arrive and click on the link in it.</p>
<p>You may close this window.</p>
<p>You will be directed to the <a href="<?php echo $_smarty_tpl->getVariable('zendToURL')->value;?>
">main menu</a>
   in a moment.</p>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
