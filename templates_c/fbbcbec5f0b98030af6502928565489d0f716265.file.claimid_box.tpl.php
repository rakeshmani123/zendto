<?php /* Smarty version Smarty-3.0.8, created on 2015-10-05 07:11:15
         compiled from "/home/antriksh/public_html/zendto/templates/claimid_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207978281556125ad3eb3a23-87734918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbbcbec5f0b98030af6502928565489d0f716265' => 
    array (
      0 => '/home/antriksh/public_html/zendto/templates/claimid_box.tpl',
      1 => 1337478430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207978281556125ad3eb3a23-87734918',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('cameFromEmail')->value){?>
<h4>Please enter the claim id and claim passcode that were emailed to you.
<?php }else{ ?>
<h4>Please enter the claim id and claim passcode.
<?php }?>
<?php if ($_smarty_tpl->getVariable('isAuthorizedUser')->value){?>
If the sender gave you a passcode for the claim, please enter it.
<?php }?>
</h4>

<center>
  <form name="pickup" method="post" action="<?php echo $_smarty_tpl->getVariable('zendToURL')->value;?>
pickup.php">
    <input type="hidden" name="auth" value="<?php echo $_smarty_tpl->getVariable('auth')->value;?>
"/>
    <table class="UD_form" cellpadding="4">
<!--
      <tr class="UD_form_header">
        <td colspan="2">File Pick-Up</td>
      </tr>
-->
      <tr>
        <td align="right"><b>Claim ID:</b></td>
        <td><input type="text" id="claimID" name="claimID" size="16" value="<?php echo $_smarty_tpl->getVariable('claimID')->value;?>
"/></td>
      </tr>
      <tr>
        <td align="right"><b>Claim Passcode:</b></td>
        <td><input type="text" name="claimPasscode" size="16" value=""/></td>
      </tr>
      <tr class="UD_form_footer">
        <td colspan="2" align="center"><input type="submit" name="pickup" value="Pick-up the File(s)"/></td>
      </tr>
    </table>
  </form>
</center>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
