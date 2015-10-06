<?php /* Smarty version Smarty-3.0.8, created on 2015-09-19 04:09:46
         compiled from "/home/antriksh/public_html/Zend/templates/pickupcheck.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134505860455fd184ad2d7e2-85245921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0a3c2ebc6af93baafc8f8131fd45930ede8184e' => 
    array (
      0 => '/home/antriksh/public_html/Zend/templates/pickupcheck.tpl',
      1 => 1432665072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134505860455fd184ad2d7e2-85245921',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

  <form name="pickupcheck" method="post" action="<?php echo $_smarty_tpl->getVariable('zendToURL')->value;?>
pickup.php">
      <input type="hidden" name="Action" value="Pickup"/>
      <input type="hidden" name="claimID" value="<?php echo $_smarty_tpl->getVariable('claimID')->value;?>
"/>
      <input type="hidden" name="claimPasscode" value="<?php echo $_smarty_tpl->getVariable('claimPasscode')->value;?>
"/>
      <input type="hidden" name="emailAddr" value="<?php echo $_smarty_tpl->getVariable('emailAddr')->value;?>
"/>
      <input type="hidden" name="auth" value="<?php echo $_smarty_tpl->getVariable('auth')->value;?>
"/>

      <table border="0" cellpadding="4">

            <tr class="UD_form_header"><td colspan="2">
              <h4>Please prove you are a person</h4>
            </td></tr>

            <tr>
              <td colspan="2" align="center">
                To confirm that you are a <i>real</i> person (and not a computer), please complete the quick challenge below then click "Pickup Files":<br />&nbsp;<br />
                <?php echo $_smarty_tpl->getVariable('recaptchaHTML')->value;?>

                <br />
              </td>
            </tr>

            <tr class="footer"><td colspan="2" align="center">
              <?php smarty_template_function_button($_smarty_tpl,array('href'=>"javascript:document.pickupcheck.submit();",'width'=>"100%",'text'=>"Pickup Files"));?>

            </tr>

      </table>
  </form>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
