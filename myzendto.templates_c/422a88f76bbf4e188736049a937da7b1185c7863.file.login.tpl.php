<?php /* Smarty version Smarty-3.0.8, created on 2015-10-05 05:26:51
         compiled from "/home/antriksh/public_html/Zend/myzendto.templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21325684755612425bf3e807-98878663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '422a88f76bbf4e188736049a937da7b1185c7863' => 
    array (
      0 => '/home/antriksh/public_html/Zend/myzendto.templates/login.tpl',
      1 => 1311725466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21325684755612425bf3e807-98878663',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<script type="text/javascript">
$(document).ready(function(){
	bindEnter($('input[name=password]'), function(){
		$('form[name=login]').submit();
	});
});
</script>
<?php if ($_smarty_tpl->getVariable('isLocalIP')->value){?>
<h4>Please login above.</h4>
<?php }else{ ?>
<br><br><br>
<br><br><br>
<center>
  <form name="login" method="post" action="<?php echo $_smarty_tpl->getVariable('zendToURL')->value;?>
">
  <input type="hidden" name="action" value="login">
  <table class="UD_form" cellpadding="4">
    <tr class="UD_form_header">
      <td colspan="2">Please Login</td>
    </tr>
    <tr>
      <td align="right"><b>Your <?php echo $_smarty_tpl->getConfigVariable('Username');?>
:</b></td>
      <td><input type="text" id="uname" name="uname" size="15" value=""/></td>
    </tr>
    <tr>
      <td align="right"><b>Your Password:</b></td>
      <td><input type="password" name="password" size="15" value=""/></td>
    </tr>
    <tr class="footer">
      <td colspan="2" align="center">
        <script type="text/javascript">
          function submitform() { document.login.submit(); }
        </script>
        <button onclick="javascript:submitform();" style="width:110px">Login</button>
      </td>
    </tr>
  </table>
  </form>
</center>
<?php }?>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
