<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/spamfilter/tpl/js/spamfilter_admin.js--><?php $__tmp=array('modules/spamfilter/tpl/js/spamfilter_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->spamfilter ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_content_spamfilter" target="_blank"><?php echo $__Context->lang->help ?></a></h1>
</div>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/spamfilter/tpl/1'){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
    <p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
</div><?php } ?>
