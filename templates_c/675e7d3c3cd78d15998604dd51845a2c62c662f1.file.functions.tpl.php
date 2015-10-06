<?php /* Smarty version Smarty-3.0.8, created on 2015-09-19 04:08:11
         compiled from "/home/antriksh/public_html/Zend/templates/functions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184129571955fd17eb5624c3-00710324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '675e7d3c3cd78d15998604dd51845a2c62c662f1' => 
    array (
      0 => '/home/antriksh/public_html/Zend/templates/functions.tpl',
      1 => 1301540618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184129571955fd17eb5624c3-00710324',
  'function' => 
  array (
    'button' => 
    array (
      'parameter' => 
      array (
        'href' => '',
        'text' => '&nbsp;',
        'width' => '',
        'admin' => '',
        'relative' => true,
      ),
      'compiled' => '',
    ),
    'footerButtons' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'has_nocache_code' => 0,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!function_exists('smarty_template_function_button')) {
    function smarty_template_function_button($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->template_functions['button']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
  <?php if ($_smarty_tpl->getVariable('width')->value!=''){?>
    <?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable(" width=\"".($_smarty_tpl->getVariable('width')->value)."\"", null, null);?>
  <?php }?>
  <?php if ($_smarty_tpl->getVariable('admin')->value){?>
    <?php $_smarty_tpl->tpl_vars['admin'] = new Smarty_variable("_admin", null, null);?>
  <?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['admin'] = new Smarty_variable('', null, null);?>
  <?php }?>
  <?php if ($_smarty_tpl->getVariable('relative')->value){?>
    <?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable(($_smarty_tpl->getVariable('zendTOURL')->value).($_smarty_tpl->getVariable('href')->value), null, null);?>
  <?php }?>
  <table<?php echo $_smarty_tpl->getVariable('width')->value;?>
 class="UD_textbutton">
    <tr valign="middle">
      <td class="UD_textbutton_left<?php echo $_smarty_tpl->getVariable('admin')->value;?>
"><a class="UD_textbuttonedge" href="<?php echo $_smarty_tpl->getVariable('href')->value;?>
">&nbsp;</a></td>
      <td class="UD_textbutton_content<?php echo $_smarty_tpl->getVariable('admin')->value;?>
" align="center"><a class="UD_textbutton<?php echo $_smarty_tpl->getVariable('admin')->value;?>
" href="<?php echo $_smarty_tpl->getVariable('href')->value;?>
"><?php echo $_smarty_tpl->getVariable('text')->value;?>
</a></td>
      <td class="UD_textbutton_right<?php echo $_smarty_tpl->getVariable('admin')->value;?>
"><a class="UD_textbuttonedge" href="<?php echo $_smarty_tpl->getVariable('href')->value;?>
">&nbsp;</a></td>
    </tr>
  </table><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<?php if (!function_exists('smarty_template_function_footerButtons')) {
    function smarty_template_function_footerButtons($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->template_functions['footerButtons']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
  <table border="0" cellpadding="4"><tr>
  <td><?php smarty_template_function_button($_smarty_tpl,array('href'=>($_smarty_tpl->getVariable('zendToURL')->value),'text'=>"Return to the ".($_smarty_tpl->getConfigVariable('ServiceTitle'))." main menu"));?>
</td>
  <?php if ($_smarty_tpl->getVariable('isAuthorizedUser')->value){?><td><?php smarty_template_function_button($_smarty_tpl,array('href'=>($_smarty_tpl->getVariable('zendToURL')->value)."?action=logout",'text'=>"Logout"));?>
</td><?php }?></tr>
  </table><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>



