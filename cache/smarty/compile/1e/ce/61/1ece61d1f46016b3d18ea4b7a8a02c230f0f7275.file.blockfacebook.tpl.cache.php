<?php /* Smarty version Smarty-3.1.19, created on 2018-08-30 11:20:32
         compiled from "/home/d/d915435c/d915435c.beget.tech/public_html/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1617306755b87a8d0b98259-48644200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ece61d1f46016b3d18ea4b7a8a02c230f0f7275' => 
    array (
      0 => '/home/d/d915435c/d915435c.beget.tech/public_html/modules/blockfacebook/blockfacebook.tpl',
      1 => 1535617229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1617306755b87a8d0b98259-48644200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b87a8d0ba4789_53699382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b87a8d0ba4789_53699382')) {function content_5b87a8d0ba4789_53699382($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
