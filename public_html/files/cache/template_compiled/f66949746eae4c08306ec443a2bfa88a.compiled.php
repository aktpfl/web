<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/kin/skins/xe_kin_official','header.include.html') ?>
<!--#Meta:modules/kin/skins/xe_kin_official/js/editor_script.js--><?php $__tmp=array('modules/kin/skins/xe_kin_official/js/editor_script.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
 <div class="section clearfix">
        <h2 class="sec_title"><?php if($__Context->selected_reply){ ?><span class="red"><?php echo $__Context->lang->solved_question ?></span><?php };
if(!$__Context->selected_reply){ ?><span class="green"><?php echo $__Context->lang->open_question ?></span><?php } ?></h2>
        <div class="corner01">
            <div class="question">
                <div class="pf_img">
					<?php  
						$__Context->oMemberModel = &getModel('member');
						$__Context->memberImage = $__Context->oMemberModel->getProfileImage($__Context->oDocument->get('member_srl'));
					 ?>
					<?php if($__Context->memberImage){ ?><img border="0" src="<?php echo $__Context->memberImage->src ?>" width="90" height="90"><?php } ?>
					<?php if(!$__Context->memberImage){ ?><img src="/modules/kin/skins/xe_kin_official/img/default_profile_pic90.png" width="90" height="90" alt=""><?php } ?>
				</div>
                <div class="pg">    
                    <div class="kin_header">
                        <h3 class="pg_title"><?php echo $__Context->oDocument->getTitle() ?></h3>
                        <div class="meta">
                            <span class="cate"><?php echo $__Context->categories[$__Context->oDocument->get('category_srl')]->title ?></span>
                            <span class="author"><?php echo $__Context->oDocument->getNickName() ?></span>
                            <span class="date"><?php echo $__Context->oDocument->getRegdate('Y.m.d') ?> <?php echo $__Context->oDocument->getRegdate('H:i') ?></span>
                            <span class="point status"><strong class="red">Given Points  <?php echo $__Context->oDocument->get('point') ?></strong></span>
                        </div>
						<a href="#" class="kin_btn" data="<?php echo $__Context->oDocument->get('voted_count') ?>" onclick="voteQuestion(<?php echo $__Context->oDocument->document_srl ?>); return false;"><span><?php echo $__Context->lang->voted_count ?> ( <strong id="q_voteno_<?php echo $__Context->oDocument->document_srl ?>"><?php echo $__Context->oDocument->get('voted_count') ?></strong> )</span></a>
                    </div><!-- //header -->
                    <div class="pg_txt">
						 <?php echo $__Context->oDocument->getContent(false,false) ?>
                    </div><!-- //pg_txt -->
                </div><!-- //pg -->
            </div><!-- //question -->
            <!-- border-round elements -->
            <span class="corn tl"></span><span class="corn tr"></span><span class="corn bl"></span><span class="corn br"></span>
        </div><!-- //corner01 -->
</div><!-- //section -->
<?php Context::addJsFile("modules/kin/ruleset/insertReply.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" method="post"  id="fo_kin_reply" class="writeForm"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertReply" />
	<input type="hidden" name="act" value="procKinInsertReply" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
	<input type="hidden" name="comment_srl" value="<?php echo $__Context->oReply->get('comment_srl') ?>" />
	<input type="hidden" name="content" value="" />
	<input type="hidden" name="title" value="" />
    <div class="section compose_ans clearfix ">
        <h2 class="sec_title"><?php echo $__Context->lang->cmd_reply ?></h2>
        <div class="ta_box">
			<?php echo $__Context->oReply->getEditor() ?>
        </div><!-- //ta_box -->
        <a href="" class="btn_back" onclick="location.href=current_url.setQuery('act','dispKinView');return false;"><span><?php echo $__Context->lang->back ?></span></a>
        <span class="btn_sbmt"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>"></span>
    </div>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/kin/skins/xe_kin_official','footer.include.html') ?>