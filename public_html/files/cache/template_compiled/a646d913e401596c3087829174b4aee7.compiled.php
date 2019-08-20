<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/page/tpl/js/page_admin.js--><?php $__tmp=array('modules/page/tpl/js/page_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/page/tpl','header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/page/tpl/page_delete/1'){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
	<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/page/ruleset/deletePage.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="deletePage" />
	<input type="hidden" name="module" value="page" />
	<input type="hidden" name="act" value="procPageAdminDelete" />
	<input type="hidden" name="page" value="<?php echo escape($__Context->page, false) ?>" />
	<input type="hidden" name="module_srl" value="<?php echo escape($__Context->module_info->module_srl, false) ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/page/tpl/page_delete/1" />
	<section class="section">
		<h2><?php echo $__Context->lang->confirm_delete ?></h2>
			<p><?php echo $__Context->lang->page_delete_warning ?></p>
			</section>
	<table class="x_table x_table-striped x_table-hover">
		<tr>
			<th scope="row"><?php echo $__Context->lang->module_name ?></th>
			<td><?php echo escape($__Context->module_info->mid, false) ?></td>
		</tr>
		<tr>
			<th scope="row"><?php echo $__Context->lang->module ?></th>
			<td><?php echo escape($__Context->module_info->module, false) ?></td>
		</tr>
	</table>
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_delete ?></button>
			<a href="<?php echo escape(getUrl('act','dispPageAdminContent','module_srl',''), false) ?>" class="x_btn"><?php echo $__Context->lang->cmd_back ?></a>
		</div>
	</div>
</form>
