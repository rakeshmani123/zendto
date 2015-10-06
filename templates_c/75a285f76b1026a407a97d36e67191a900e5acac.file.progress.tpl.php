<?php /* Smarty version Smarty-3.0.8, created on 2015-10-05 07:06:22
         compiled from "/home/antriksh/public_html/zendto/templates/progress.tpl" */ ?>
<?php /*%%SmartyHeaderCode:353772765561259ae499d74-00303738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75a285f76b1026a407a97d36e67191a900e5acac' => 
    array (
      0 => '/home/antriksh/public_html/zendto/templates/progress.tpl',
      1 => 1317617552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '353772765561259ae499d74-00303738',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
  <head>
    <link rel="stylesheet" type="text/css" href="css/<?php echo $_smarty_tpl->getConfigVariable('CSSTheme');?>
.css"/>
    <title>Progress Bar</title>
    <script type="text/javascript" src="js/prototype.js"></script>
  </head>
  <body style="background:#FAFAFA;">

  <script type="text/javascript">
   <!--
   function start(id) { 
    $('progressouter').style.display = 'block';
    // $('#progress').style.visibility = 'visible';
    fire(id);
   }

   var notfirst = 0;
	function fire(id) {
		complete = new Ajax.PeriodicalUpdater('percent', 'get_progress.php?progress_id='+id, { frequency: 1, decay: 0, onSuccess: 
			function(transport) { 
				var pc = parseInt(transport.responseText); 
				var percentage = parseInt(100 - pc);
				
				if(typeof pc == "undefined" || percentage > 96) return;
				$('progressinner').style.visibility = 'visible';
				
				
				if(pc <= 5){
					var increase = (15 / pc) * pc;
					// 3.75
					var br = '15px 15px ' + increase + 'px ' + increase + 'px;';
					$('progressinner').style.borderRadius = br;
					$('progressinner').style.MozBorderRadius = br; // Mozilla
					$('progressinner').style.WebkitBorderRadius = br; // WebKit
				}
				
				$('progressinner').style.width = (100-pc) + '%';
				if (notfirst == 1) { 
					$('progressouter').style.visibility = 'visible'; 
					$('percentText').style.visibility = 'visible'; 
					notfirst=2;
				}
				notfirst=1;
			}
		});
	}

   -->
  </script>
  
	<div id="progressContainer"> 
		<div id="progressouter"> 
			<div id="progressinner" style="width:0%; visibility:hidden"></div> 
		</div> 
	</div> 

  <div id="percentText">Remaining: <span id="percent"></span>%</div>

  </body>
</html>
