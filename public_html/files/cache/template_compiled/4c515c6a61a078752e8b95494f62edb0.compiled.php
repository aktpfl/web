<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/kin/tpl','_header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/kin/ruleset/insertKin.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" method="post"  id="fo_insert_kin" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertKin" />
<input type="hidden" name="act" value="procKinAdminInsert" />
<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<div class="table">
		<table cellspacing="0" class="rowTable">
		<?php if($__Context->logged_info->is_admin!='Y'){ ?><input type="hidden" name="kin_name" value="<?php echo $__Context->module_info->mid ?>" /><?php } ?>
		<?php if($__Context->logged_info->is_admin=='Y'){ ?><tr>
			<th scope="row"><div><?php echo $__Context->lang->mid ?></div></th>
			<td>
				<input type="text" name="kin_name" value="<?php echo $__Context->module_info->mid ?>" class="inputTypeText w200" />
				<p><?php echo $__Context->lang->about_mid ?></p>
			</td>
		</tr><?php } ?>
		<tr>
			<th scope="row"><div><?php echo $__Context->lang->module_category ?></div></th>
			<td>
				<select name="module_category_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->module_category_srl==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<p><?php echo $__Context->lang->about_module_category ?></p>
			</td>
		</tr>
		<tr>
			<th scope="row"><div><?php echo $__Context->lang->browser_title ?></div></th>
			<td>
				<input type="text" name="browser_title" value="<?php echo htmlspecialchars($__Context->module_info->browser_title) ?>"  class="inputTypeText w400" id="browser_title"/>
				<a href="<?php echo getUrl('','module','module','act','dispModuleAdminLangcode','target','browser_title') ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_find_langcode ?></span></a>
				<p><?php echo $__Context->lang->about_browser_title ?></p>
			</td>
		</tr>
		<tr>
			<th scope="row"><div><?php echo $__Context->lang->layout ?></div></th>
			<td>
				<select name="layout_srl">
				<option value="0"><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->layout_srl==$__Context->val->layout_srl){ ?> selected="selected"<?php } ?> ><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<p><?php echo $__Context->lang->about_layout ?></p>
			</td>
		</tr>
		<tr>
			<th scope="row"><div><?php echo $__Context->lang->skin ?></div></th>
			<td>
				<select name="skin">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>" <?php if($__Context->module_info->skin==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<p><?php echo $__Context->lang->about_skin ?></p>
			</td>
		</tr>
		<tr>
			<th class="row"><div><?php echo $__Context->lang->mobile_view ?></div></th>
			<td><input type="checkbox" name="use_mobile" id="use_mobile" value="Y"<?php if($__Context->module_info->use_mobile == 'Y'){ ?> checked="checked"<?php } ?> /> <label for="use_mobile"><?php echo $__Context->lang->about_mobile_view ?></label></td>
		</tr>
		<tr>
			<th class="row"><div><?php echo $__Context->lang->mobile_layout ?></div></th>
			<td>
				<select name="mlayout_srl" id="layout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->mlayout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<p class="desc"><?php echo $__Context->lang->about_layout ?></p>
			</td>
		</tr>
		<tr>
			<th class="row"><div><?php echo $__Context->lang->mobile_skin ?></div></th>
			<td>
				<select name="mskin" id="mskin">
					<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->mskin== $__Context->key || (!$__Context->module_info->skin && $__Context->key=='xe_board')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<p class="desc"><?php echo $__Context->lang->about_skin ?></p>
			</td>
		</tr>
		<tr>
			<th scope="row"><div><?php echo $__Context->lang->qa_title ?></div></th>
			<td>
				<input type="text" name="qa_title" value="<?php echo $__Context->module_info->qa_title ?>"  class="inputTypeText" />
				<p><?php echo $__Context->lang->about_qa_title ?></p>
			</td>
		</tr>
		<tr>
			<th scope="row"><div><?php echo $__Context->lang->list_count ?></div></th>
			<td>
				<input type="text" name="list_count" value="<?php echo $__Context->module_info->list_count?$__Context->module_info->list_count:10 ?>"  class="inputTypeText" />
				<p><?php echo $__Context->lang->about_kin_list_count ?></p>
			</td>
		</tr>
		<tr>
			<th scope="row"><div><?php echo $__Context->lang->use_category ?></div></th>
			<td>
				<input type="checkbox" name="use_category" value="Y" <?php if($__Context->module_info->use_category=='Y'){ ?>checked="checked"<?php } ?>  class="checkbox" id="fld_for_category" />
				<label for="fld_for_category"><?php echo $__Context->lang->about_use_category ?></label>
			</td>
		</tr>
		<tr>
			<th scope="row"><div><?php echo $__Context->lang->limit_write ?></div></th>
			<td>
				<input type="checkbox" name="limit_write" value="Y" <?php if($__Context->module_info->limit_write =='Y'){ ?>checked="checked"<?php } ?>  class="checkbox" id="fld_for_limit_write" />
				<label for="fld_for_limit_write"><?php echo $__Context->lang->about_limit_write ?></label>
			</td>
		</tr>
		<tr>
			<th scope="row"><div><?php echo $__Context->lang->limit_give_point ?></div></th>
			<td>
				<input type="text" name="limit_give_point" value="<?php echo $__Context->module_info->limit_give_point ?>" id="fld_for_limit_give_point" class="inputTypeText"/>
				<label for="fld_for_limit_give_point"><?php echo $__Context->lang->about_limit_give_point ?></label>
			</td>
		</tr>
		<tr>
			<th scope="row"><div><?php echo $__Context->lang->description ?></div></th>
			<td>
				<textarea name="description" class="inputTypeTextArea fullWidth" style="width:60%;height:100px"><?php echo htmlspecialchars($__Context->module_info->description) ?></textarea>
				<p><?php echo $__Context->lang->about_description ?></p>
			</td>
		</tr>
		</table>
	</div>
	<div class="btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" accesskey="s" /></span>
		<span class="btn"><a href="<?php echo getUrl('act','dispKinAdminList','module_srl','') ?>"><?php echo $__Context->lang->cmd_back ?></a></span>
	</div>
</form>
