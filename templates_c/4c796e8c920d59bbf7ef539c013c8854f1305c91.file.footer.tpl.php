<?php /* Smarty version Smarty-3.0.8, created on 2015-10-05 07:05:22
         compiled from "/home/antriksh/public_html/zendto/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124185327556125972e313d4-82540539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c796e8c920d59bbf7ef539c013c8854f1305c91' => 
    array (
      0 => '/home/antriksh/public_html/zendto/templates/footer.tpl',
      1 => 1301540618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124185327556125972e313d4-82540539',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- End page content -->

	</div>
</div>

<div id="footer">
	Version <?php echo $_smarty_tpl->getVariable('ztVersion')->value;?>
&nbsp;|&nbsp;<?php echo $_smarty_tpl->getConfigVariable('ContactInfo');?>
<?php if ($_smarty_tpl->getVariable('whoAmI')->value!=''){?>&nbsp;|&nbsp;you are currently logged in as <i><?php echo $_smarty_tpl->getVariable('whoAmI')->value;?>
</i><?php }?>
	&nbsp;|&nbsp;<a href="about.php">About <?php echo $_smarty_tpl->getConfigVariable('ServiceTitle');?>
</a>
</div>

</body>
</html>
