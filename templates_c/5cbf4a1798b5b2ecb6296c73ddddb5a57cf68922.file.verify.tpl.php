<?php /* Smarty version Smarty-3.0.8, created on 2015-09-19 04:09:09
         compiled from "/home/antriksh/public_html/Zend/templates/verify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135726371655fd18252aa296-57771347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cbf4a1798b5b2ecb6296c73ddddb5a57cf68922' => 
    array (
      0 => '/home/antriksh/public_html/Zend/templates/verify.tpl',
      1 => 1432665072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135726371655fd18252aa296-57771347',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<script type="text/javascript">
<!--

function validateForm()
{
  if ( document.dropoff.req.value != "" ) {
    return true;
  }
  if ( document.dropoff.senderName.value == "" ) {
    alert("Please enter your name before submitting.");
    document.dropoff.senderName.focus();
    return false;
  }
  if ( document.dropoff.senderOrganization.value == "" ) {
    alert("Please enter your organisation before submitting.");
    document.dropoff.senderOrganization.focus();    return false;
  }  if ( document.dropoff.senderEmail.value == "" ) {
    alert("Please enter your email address before submitting.");
    document.dropoff.senderEmail.focus();    return false;
  }
  
  return true;
}

//-->
</script>
  <form name="dropoff" id="dropoff" method="post"
      action="<?php echo $_smarty_tpl->getVariable('zendToURL')->value;?>
verify.php"
      enctype="multipart/form-data" onsubmit="return validateForm();">
      <input type="hidden" name="Action" value="verify"/>
      <table border="0" cellpadding="4">

        <tr><td width="100%">
          <table class="UD_form" width="100%" cellpadding="4">
            <tr class="UD_form_header"><td colspan="2">
              <h4>Information about the Sender</h4>
            </td></tr>

<?php if ($_smarty_tpl->getVariable('verifyFailed')->value){?>
            <tr><td colspan="2"><b>You did not complete the form, or you failed the "Am I A Real Person?" test.</b></td></tr>
<?php }?>

            <tr><td colspan="2">If you have been given a "<b>Request Code</b>" then just enter it here and click the button at the bottom of this form.</td></tr>
            <tr>
              <td align="right"><label for="req">Request Code:</label></td>
              <td width="60%"><input type="text" id="req" name="req" size="45" value="" class="UITextBox" /></td>
            </tr>
            <tr><td colspan="2"><hr style="width: 80%;"/></td></tr>
            <tr><td colspan="2">If you do not have a "Request Code" then please complete the rest of this form:</td></tr>

            <tr>
              <td align="right"><label for="senderName">Your name:</label></td>
<?php if ($_smarty_tpl->getVariable('isAuthorizedUser')->value){?>
              <td width="60%"><input type="hidden" id="senderName" name="senderName" value="<?php echo $_smarty_tpl->getVariable('senderName')->value;?>
"><?php echo $_smarty_tpl->getVariable('senderName')->value;?>
</td>
<?php }else{ ?>
              <td width="60%"><input type="text" id="senderName" name="senderName" size="45" value="<?php echo $_smarty_tpl->getVariable('senderName')->value;?>
" class="UITextBox" /><font style="font-size:9px">(required)</font></td>
<?php }?>
            </tr>

            <tr>
              <td align="right"><label for="senderOrganization">Your organisation:</label></td>
              <td width="60%"><input type="text" id="senderOrganization" name="senderOrganization" size="45" value="<?php echo $_smarty_tpl->getVariable('senderOrg')->value;?>
"/><font style="font-size:9px">(required)</font></td>
            </tr>
            <tr>
              <td align="right"><label for="senderEmail">Your email address:</label></td>
<?php if ($_smarty_tpl->getVariable('isAuthorizedUser')->value){?>
              <td width="60%"><input type="hidden" id="senderEmail" name="senderEmail" value="<?php echo $_smarty_tpl->getVariable('senderEmail')->value;?>
"><?php echo $_smarty_tpl->getVariable('senderEmail')->value;?>
</td>
<?php }else{ ?>
              <td width="60%"><input type="text" id="senderEmail" name="senderEmail" size="45" value="<?php echo $_smarty_tpl->getVariable('senderEmail')->value;?>
" class="UITextBox" /><font style="font-size:9px">(required)</font></td>
<?php }?>
            </tr>

<?php if (!$_smarty_tpl->getVariable('isAuthorizedUser')->value){?>
            <tr>
              <td colspan="2" align="center">
  <?php if (!$_smarty_tpl->getVariable('recaptchaDisabled')->value){?>
                To confirm that you are a <i>real</i> person (and not a computer), please complete the quick challenge below:<br />&nbsp;<br />
                <?php echo $_smarty_tpl->getVariable('recaptchaHTML')->value;?>

                <br />
  <?php }?>
                I now need to send you a confirmation email.<br />
                When you get it in a minute or two, click on
                the link in it.
              </td>
            </tr>

            <tr class="footer"><td colspan="2" align="center">
              <script type="text/javascript">
                function submitform() {
                  if (validateForm()) { document.dropoff.submit(); }
                }
              </script>
              <?php smarty_template_function_button($_smarty_tpl,array('relative'=>false,'href'=>"javascript:submitform();",'text'=>"Send confirmation"));?>

            </tr>
<?php }else{ ?>
            <tr class="footer"><td colspan="2" align="center">
              <script type="text/javascript">
                function submitform() {
                  if (validateForm()) { document.dropoff.submit(); }
                }
              </script>
              <?php smarty_template_function_button($_smarty_tpl,array('relative'=>false,'href'=>"javascript:submitform();",'text'=>"Next"));?>

            </tr>

<?php }?>

          </table>
        </td></tr>

      </table>
</form>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
