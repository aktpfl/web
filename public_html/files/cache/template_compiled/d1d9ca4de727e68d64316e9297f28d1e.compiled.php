<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_v3_gallery_haan','_header.html') ?>
<?php if($__Context->oDocument->isExists()){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_v3_gallery_haan','_read.html') ?>
<?php }else{ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_v3_gallery_haan','_list.html') ?>
<?php } ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_v3_gallery_haan','_footer.html') ?>