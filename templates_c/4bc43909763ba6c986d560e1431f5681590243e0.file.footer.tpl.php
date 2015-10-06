<?php /* Smarty version Smarty-3.0.8, created on 2015-09-19 04:08:11
         compiled from "/home/antriksh/public_html/Zend/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40430548355fd17eb6333b8-21680097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bc43909763ba6c986d560e1431f5681590243e0' => 
    array (
      0 => '/home/antriksh/public_html/Zend/templates/footer.tpl',
      1 => 1301540618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40430548355fd17eb6333b8-21680097',
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
