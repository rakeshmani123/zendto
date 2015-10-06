<?php /* Smarty version Smarty-3.0.8, created on 2015-10-05 05:26:52
         compiled from "/home/antriksh/public_html/Zend/myzendto.templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2972454565612425c296982-00908794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c44a98430bf6869dea17ecf73f1684025f48e0fb' => 
    array (
      0 => '/home/antriksh/public_html/Zend/myzendto.templates/footer.tpl',
      1 => 1306450160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2972454565612425c296982-00908794',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<br style="clear:both" />
<?php if ($_smarty_tpl->getVariable('isIndexPage')->value==false){?>
  <?php smarty_template_function_footerButtons($_smarty_tpl,array());?>

<?php }?>

<br style="clear:both" />
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

