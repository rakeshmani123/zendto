<?php /* Smarty version Smarty-3.0.8, created on 2015-10-05 07:11:30
         compiled from "/home/antriksh/public_html/zendto/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163263031456125ae2751a07-22481164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cdba23fb6fb83d890cc3039800a4bc94fd935a9' => 
    array (
      0 => '/home/antriksh/public_html/zendto/templates/login.tpl',
      1 => 1337365114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163263031456125ae2751a07-22481164',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('isLocalIP')->value){?>
<h4>Please login above.</h4>
<?php }else{ ?>
<br><br><br>
<center>
  <form name="login" method="post" action=".">
  <input type="hidden" name="action" value="login">
  <table class="UD_form" cellpadding="4">
    <tr class="UD_form_header">
      <td colspan="2">Authentication</td>
    </tr>
    <tr>
      <td align="right"><b>Your <?php echo $_smarty_tpl->getConfigVariable('Username');?>
:</b></td>
      <td><input type="text" id="uname" name="uname" size="15" value=""/></td>
    </tr>
    <tr>
      <td align="right"><b>Your Password:</b></td>
      <td><input type="password" id="passwordField" name="password" size="15" value=""/></td>
    </tr>
    <tr class="footer">
      <td colspan="2" align="center">
        <script type="text/javascript">
        	bindEnter($('#passwordField'), function(){ submitform() });
          function submitform() { document.login.submit(); }
        </script>
        <?php smarty_template_function_button($_smarty_tpl,array('relative'=>false,'href'=>"javascript:submitform();",'text'=>"Login"));?>

      </td>
    </tr>
  </table>
  </form>
</center>
<?php }?>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
