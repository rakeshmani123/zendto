<?php /* Smarty version Smarty-3.0.8, created on 2015-10-05 07:27:08
         compiled from "/home/antriksh/public_html/zendto/templates/show_dropoff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199079821956125e8c59f229-22807891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4cc5fbe483c1f74018ca9f856c78269bbc04d93' => 
    array (
      0 => '/home/antriksh/public_html/zendto/templates/show_dropoff.tpl',
      1 => 1322171340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199079821956125e8c59f229-22807891',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_replace')) include '/home/antriksh/public_html/zendto/lib/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/antriksh/public_html/zendto/lib/smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<script type="text/javascript">
<!--

function doDelete(){
  if ( confirm("Do you really want to delete this dropoff?") ) {
    return document.deleteDropoff.submit();
  }
  return 0;
}

function doResend(){
  return document.resendDropoff.submit();
}

//-->
</script>

<?php if ($_smarty_tpl->getVariable('isSendable')->value){?><div style="float:right"><button class="UD_textbutton_admin" onclick="doResend();">Resend Dropoff</button></div><?php }else{ ?>&nbsp;<?php }?>
<?php if ($_smarty_tpl->getVariable('isDeleteable')->value){?><div style="float:right"><button class="UD_textbutton_admin" onclick="doDelete();">Delete Dropoff</button></div><?php }else{ ?>&nbsp;<?php }?>

<h1>Drop-Off Summary</h1>


<?php if ($_smarty_tpl->getVariable('isClickable')->value){?>
<div align="center">
  <h4>Click on a filename or icon to download that file.</h4>
</div>
<?php }?>


<table border="0" cellpadding="5">
  <tr valign="top">
    <td>
    </td>
    <td>

<?php if ($_smarty_tpl->getVariable('dropoffFilesCount')->value>0){?>
      <table class="UD_form" cellpadding="4">
        <thead class="UD_form_header">
          <td colspan="2">Filename</td>
          <td align="center">Type</td>
          <td align="right">Size</td>
          <td>Description</td>
        </thead>
  <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('files')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
?>
        <tr class="UD_form_lined" valign="middle">
      <?php if ($_smarty_tpl->getVariable('isClickable')->value){?>
          <td width="20" align="center"><a href="<?php echo $_smarty_tpl->getVariable('downloadURL')->value;?>
&<?php if ($_smarty_tpl->getVariable('auth')->value!=''){?>auth=<?php echo $_smarty_tpl->getVariable('auth')->value;?>
&<?php }?>fid=<?php echo $_smarty_tpl->tpl_vars['f']->value['rowID'];?>
"><img src="images/generic.png" border="0" alt="[file]"/></a></td>
          <td class="UD_form_lined"><a href="<?php echo $_smarty_tpl->getVariable('downloadURL')->value;?>
&<?php if ($_smarty_tpl->getVariable('auth')->value!=''){?>auth=<?php echo $_smarty_tpl->getVariable('auth')->value;?>
&<?php }?>fid=<?php echo $_smarty_tpl->tpl_vars['f']->value['rowID'];?>
"><tt><?php echo $_smarty_tpl->tpl_vars['f']->value['basename'];?>
</tt></a></td>
      <?php }else{ ?>
          <td width="20" align="center"><img src="images/generic.png" alt="[file]"/></td>
          <td class="UD_form_lined"><tt><?php echo $_smarty_tpl->tpl_vars['f']->value['basename'];?>
</tt></td>
      <?php }?>
          <td class="UD_form_lined" align="center"><?php echo $_smarty_tpl->tpl_vars['f']->value['mimeType'];?>
</td>
          <td class="UD_form_lined" align="right"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['f']->value['length'],' ','&nbsp;');?>
</td>
          <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['f']->value['description'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</td>
        </tr>
  <?php }} ?>
        <tr class="UD_form_footer">
          <td colspan="5" align="center"><?php echo $_smarty_tpl->getVariable('dropoffFilesCount')->value;?>
 file<?php if ($_smarty_tpl->getVariable('dropoffFilesCount')->value!=1){?>s<?php }?></td>
        </tr>
      </table>
      <form name="resendDropoff" method="post" action="<?php echo $_smarty_tpl->getVariable('zendToURL')->value;?>
resend.php">
<?php if ($_smarty_tpl->getVariable('isDeleteable')->value){?>
        <input type="hidden" name="claimID" value="<?php echo $_smarty_tpl->getVariable('claimID')->value;?>
"/>
        <input type="hidden" name="claimPasscode" value="<?php echo $_smarty_tpl->getVariable('claimPasscode')->value;?>
"/>
<?php }?>

  <?php if ($_smarty_tpl->getVariable('emailAddr')->value!=''){?>
        <input type="hidden" name="emailAddr" value="<?php echo $_smarty_tpl->getVariable('emailAddr')->value;?>
"/>
  <?php }?>
      </form>
      <form name="deleteDropoff" method="post" action="<?php echo $_smarty_tpl->getVariable('zendToURL')->value;?>
delete.php">
        <input type="hidden" name="claimID" value="<?php echo $_smarty_tpl->getVariable('claimID')->value;?>
"/>
        <input type="hidden" name="claimPasscode" value="<?php echo $_smarty_tpl->getVariable('claimPasscode')->value;?>
"/>

  <?php if ($_smarty_tpl->getVariable('emailAddr')->value!=''){?>
        <input type="hidden" name="emailAddr" value="<?php echo $_smarty_tpl->getVariable('emailAddr')->value;?>
"/>
  <?php }?>
      </form>

<?php }else{ ?>
      No files in the dropoff... something is amiss!
<?php }?>

    </td>
  </tr>
</table>


<div class="UILabel">From:</div> <br class="clear" />
<div id="fromHolder"><span id="fromName"><?php echo $_smarty_tpl->getVariable('senderName')->value;?>
</span> <span id="fromEmail">(<?php echo $_smarty_tpl->getVariable('senderEmail')->value;?>
)</span> <span id="fromOrg"><?php echo $_smarty_tpl->getVariable('senderOrg')->value;?>
</span> <span>from <?php echo $_smarty_tpl->getVariable('senderHost')->value;?>
 on <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('createdDate')->value,"%d %b %Y&nbsp;&nbsp;%r");?>
</span></div>

<?php if ($_smarty_tpl->getVariable('showRecips')->value){?>
<div class="UILabel">To:</div> <br class="clear" />
<div id="emailHolder">
  <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('recipients')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
?>
              <div class='emailButton'><?php echo $_smarty_tpl->tpl_vars['r']->value[0];?>
 (<?php echo $_smarty_tpl->tpl_vars['r']->value[1];?>
)</div>
  <?php }} ?>
</div>
<?php }?>
<br class="clear" />

<div id="commentsArea">
	<label for="comments">Comments:</label><br />
	<textarea readonly="yes" id="comments" name="comments" style="width: 400px; height: 100px;"><?php echo $_smarty_tpl->getVariable('note')->value;?>
</textarea>
</div>

<div id="sendContainer">
<?php if ($_smarty_tpl->getVariable('inPickupPHP')->value){?>
  <b>Claim ID:</b> <?php echo $_smarty_tpl->getVariable('claimID')->value;?>

  <b>Claim Passcode:</b> <?php echo $_smarty_tpl->getVariable('claimPasscode')->value;?>

<?php }elseif($_smarty_tpl->getVariable('isAuthorizedUser')->value){?>
	<p>To send the file to someone else, simply send them this Claim ID and Passcode:</p>
	<textarea readonly="yes" wrap="hard" rows="2" cols="32">Claim ID: <?php echo $_smarty_tpl->getVariable('claimID')->value;?>

Claim Passcode: <?php echo $_smarty_tpl->getVariable('claimPasscode')->value;?>
</textarea>
<?php }?>
</div>

<!-- Confirm Delivery? <?php if ($_smarty_tpl->getVariable('confirmDelivery')->value){?>yes<?php }else{ ?>no<?php }?> -->

<table border="0" cellpadding="5">

<!-- Show all the recipients and their pick-up details -->
<?php if ($_smarty_tpl->getVariable('showRecips')->value){?>
  <tr>
    <td colspan="2">
  <?php if ($_smarty_tpl->getVariable('pickupsCount')->value>0){?>
      <table width="100%" class="UD_form" cellpadding="4">
        <thead class="UD_form_header">
          <td>Picked-up on date...</td>
          <td>...from remote address...</td>
          <td>...by recipient.</td>
        </thead>
    <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pickups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
?>
        <tr class="UD_form_lined" valign="middle">
          <td class="UD_form_lined"><tt><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['p']->value['pickupDate'],"%d %b %Y&nbsp;&nbsp;%r");?>
</tt></td>
          <td class="UD_form_lined"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['p']->value['hostname'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</td>
          <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['p']->value['pickedUpBy'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</td>
        </tr>
    <?php }} ?>
        <tr class="UD_form_footer">
          <td colspan="3" align="center"><?php echo $_smarty_tpl->getVariable('pickupsCount')->value;?>
 pickup<?php if ($_smarty_tpl->getVariable('pickupsCount')->value!=1){?>s<?php }?></td>
        </tr>
      </table>
  <?php }else{ ?>
    None of the files has been picked-up yet.
  <?php }?>
    </td>
  </tr>
<?php }?>
</table>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
