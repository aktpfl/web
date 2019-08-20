<?php if(!defined("__XE__"))exit;
if(!$__Context->filebox_list){ ?><p>Not a registered file.</p><?php } ?>
<?php if($__Context->filebox_list){ ?><table class="x_table x_table-striped x_table-hover">
	<?php if($__Context->allow_multiple){ ?><col style="width:25px" /><?php } ?>
	<col style="width:250px" />
	<col />
	<?php if(!$__Context->allow_multiple){ ?><col style="width:50px; white-space:nowrap" /><?php } ?>
	<tbody>
		<?php if($__Context->filebox_list&&count($__Context->filebox_list))foreach($__Context->filebox_list as $__Context->key=>$__Context->val){ ?><tr>
			<td>
				<?php if($__Context->val->fileextension=='swf'){ ?>
					<object height="100" width="100" flashvars="" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" xmlns="http://www.w3.org/1999/xhtml">
						<param value="<?php echo escape(getUrl(''), false);
echo escape($__Context->val->filename, false) ?>" name="movie" xmlns="http://www.w3.org/1999/xhtml" />
						<param value="transparent" name="wmode" xmlns="http://www.w3.org/1999/xhtml" />
						<param value="sameDomain" name="allowScriptAccess" xmlns="http://www.w3.org/1999/xhtml" />
						<param value="high" name="quality" xmlns="http://www.w3.org/1999/xhtml" />
						<embed height="100" width="100" wmode="transparent" flashvars="" autostart="false" src="<?php echo escape(getUrl(''), false);
echo escape($__Context->val->filename, false) ?>" xmlns="http://www.w3.org/1999/xhtml" />
					</object>
				<?php }elseif(in_array($__Context->val->fileextension,array('gif','png','jpg','jpeg'))){ ?>
					<img src="<?php echo escape(getUrl(''), false);
echo escape($__Context->val->filename, false) ?>" class="filebox_item" />
				<?php } ?>
			</td>
			<td>
				<?php if($__Context->val->attributes&&count($__Context->val->attributes))foreach($__Context->val->attributes as $__Context->name=>$__Context->value){ ?><p>
					<?php echo htmlspecialchars($__Context->name, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?> : <?php echo escape($__Context->value, false) ?>
				</p><?php } ?>
			</td>
			<?php if(!$__Context->allow_multiple){ ?><td>
				<button type="button" class="x_btn select" style="white-space:nowrap"><?php echo $__Context->lang->cmd_select ?></button>
			</td><?php } ?>
		</tr><?php } ?>
	</tbody>
</table><?php } ?>
<?php if($__Context->allow_multiple){ ?><div>
	<span class="x_pull-right x_btn-group">
		<button class="x_btn select"><?php echo $__Context->lang->cmd_select ?></button>
	</span>
</div><?php } ?>
<?php if($__Context->page_navigation){ ?><div class="x_pagination x_pagination-centered">
	<input type="hidden" name="module" value="<?php echo escape($__Context->module, false) ?>" />
	<input type="hidden" name="act" value="<?php echo escape($__Context->act, false) ?>" />
	<ul>
		<li<?php if(!$__Context->page || $__Context->page == 1){ ?> class="x_disabled"<?php } ?>><a href="#" page="1">&laquo; <?php echo $__Context->lang->first_page ?></a></li>
		<?php if($__Context->page_navigation->first_page != 1 && $__Context->page_navigation->first_page + $__Context->page_navigation->page_count > $__Context->page_navigation->last_page - 1 && $__Context->page_navigation->page_count != $__Context->page_navigation->total_page){ ?>
			<?php $__Context->isGoTo = true ?>
			<li>
				<a href="#goToFileBox" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
				<?php if($__Context->isGoTo){ ?><span id="goToFileBox" class="x_input-append">
					<input type="number" min="1" max="<?php echo escape($__Context->page_navigation->last_page, false) ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
					<button type="submit" class="x_add-on">Go</button>
				</span><?php } ?>
			</li>
		<?php } ?>
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<?php $__Context->last_page = $__Context->page_no ?>
			<li<?php if($__Context->page_no == $__Context->page){ ?> class="x_active"<?php } ?>><a  href="#" page="<?php echo escape($__Context->page_no, false) ?>"><?php echo escape($__Context->page_no, false) ?></a></li>
		<?php } ?>
		<?php if($__Context->last_page != $__Context->page_navigation->last_page && $__Context->last_page + 1 != $__Context->page_navigation->last_page){ ?>
			<?php $__Context->isGoTo = true ?>
			<li>
				<a href="#goToFileBox" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
				<?php if($__Context->isGoTo){ ?><span id="goToFileBox" class="x_input-append">
					<input type="number" min="1" max="<?php echo escape($__Context->page_navigation->last_page, false) ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
					<button type="submit" class="x_add-on">Go</button>
				</span><?php } ?>
			</li>
			
		<?php } ?>
		<li<?php if($__Context->page == $__Context->page_navigation->last_page){ ?> class="x_disabled"<?php } ?>><a href="#" page="<?php echo escape($__Context->page_navigation->last_page, false) ?>" title="<?php echo escape($__Context->page_navigation->last_page, false) ?>"><?php echo $__Context->lang->last_page ?> &raquo;</a></li>
	</ul>
</div><?php } ?>
<script>
	jQuery('a.tgAnchor').xeContentToggler();
</script>
