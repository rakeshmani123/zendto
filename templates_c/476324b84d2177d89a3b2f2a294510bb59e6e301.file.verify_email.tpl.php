<?php /* Smarty version Smarty-3.0.8, created on 2015-10-05 07:05:54
         compiled from "/home/antriksh/public_html/zendto/templates/verify_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83846803056125992154322-57060067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '476324b84d2177d89a3b2f2a294510bb59e6e301' => 
    array (
      0 => '/home/antriksh/public_html/zendto/templates/verify_email.tpl',
      1 => 1301540618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83846803056125992154322-57060067',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
This is an automated message sent to you by the <?php echo $_smarty_tpl->getConfigVariable('ServiceTitle');?>
 service. 

Name: <?php echo $_smarty_tpl->getVariable('senderName')->value;?>

Organization: <?php echo $_smarty_tpl->getVariable('senderOrg')->value;?>

Email: <?php echo $_smarty_tpl->getVariable('senderEmail')->value;?>


You have asked us to send you this message so that you can drop-off some files for someone.

IGNORE THIS MESSAGE IF YOU WERE NOT IMMEDIATELY EXPECTING IT!

Otherwise, continue the process by clicking the following link (or copying and pasting it into your web browser):

  <?php echo $_smarty_tpl->getVariable('URL')->value;?>


