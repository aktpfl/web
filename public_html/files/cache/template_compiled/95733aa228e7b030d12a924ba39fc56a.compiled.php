<?php if(!defined("__XE__"))exit;?><meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--#Meta:layouts/eond_rosso/css/bootstrap.min.css--><?php $__tmp=array('layouts/eond_rosso/css/bootstrap.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::unloadFile('layouts/eond_rosso/css/bootstrap-responsive.min.css','',''); ?>
<!--#Meta:layouts/eond_rosso/css/font-awesome.css--><?php $__tmp=array('layouts/eond_rosso/css/font-awesome.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/eond_rosso/css/font-awesome.min.css--><?php $__tmp=array('layouts/eond_rosso/css/font-awesome.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/eond_rosso/css/font-awesome-ie7.min.css--><?php $__tmp=array('layouts/eond_rosso/css/font-awesome-ie7.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/eond_rosso/css/default.css--><?php $__tmp=array('layouts/eond_rosso/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/eond_rosso/js/bootstrap.min.js--><?php $__tmp=array('layouts/eond_rosso/js/bootstrap.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/eond_rosso/js/default.js--><?php $__tmp=array('layouts/eond_rosso/js/default.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::unloadFile('http://code.jquery.com/jquery.js',''); ?>
<?php 
	$__Context->li=$__Context->layout_info;$__Context->dispAdminTheme_link=getUrl('act','dispAdminTheme');
	$__Context->is_not_mv = !(Mobile::isMobileCheckByAgent() && !$__Context->_COOKIE['fakeM']);
 ?>
<?php echo Context::set("admin_bar", "false") ?>
<?php if($__Context->lang_type=='ko'){ ?>
<?php 
$__Context->lang->tb_more="더보기";
$__Context->lang->tb_message="쪽지";
$__Context->lang->tb_theme="테마";
$__Context->lang->tb_site="사이트";
$__Context->lang->tb_message_alaram_title="쪽지 알림";
$__Context->lang->tb_admin_only_content="";
$__Context->lang->tb_socialxe_social_info="소셜 정보";
$__Context->lang->tb_not_readed_message="개의 읽지 않은 쪽지가 있습니다.";
 ?>
<?php }else{ ?>
<?php 
$__Context->lang->tb_more="More...";
$__Context->lang->tb_message="Message";
$__Context->lang->tb_theme="Theme";
$__Context->lang->tb_site="Site";
$__Context->lang->tb_message_alaram_title="New Message";
$__Context->lang->tb_admin_only_content ="";
$__Context->lang->tb_socialxe_social_info="Social Infomation";
$__Context->lang->tb_not_readed_message="";
 ?>
<?php } ?>
<!--s:hgroup-->
<hgroup class="navbar navbar-inverse navbar-static-top">
<div>
<!-- s:sitebar -->
<aside class="sitebar visible-desktop">
	<ul>
	<?php if($__Context->site_menu->list&&count($__Context->site_menu->list))foreach($__Context->site_menu->list as $__Context->key => $__Context->val){;
if($__Context->val['link']){ ?>
		<?php if($__Context->val['selected']){ ?>
			<?php  $__Context->menu_1st = $__Context->val  ?>
		<?php } ?>
	<li <?php if($__Context->val['selected']){ ?>class="on"<?php } ?>><a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val['link'] ?></a></li>
	<?php };
} ?>
	</ul>
	<ul class="login">
        <?php if(!$__Context->is_logged){ ?>
		<li><a href="<?php echo getUrl('mid',$__Context->layout_info->target_mid,'act','dispMemberSignUpForm') ?>"><img src="/layouts/eond_rosso/img/login/btn_signup.png"></a></li>
		<li><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><img src="/layouts/eond_rosso/img/login/btn_login.png"></a></li>
        <?php }else{ ?>
            <!--<li><a href="<?php echo geturl('act','dispMemberInfo') ?>">정낙훈님</a></li>-->
            <li><a href="<?php echo getUrl('act','dispMemberLogout') ?>"><img src="/layouts/eond_rosso/img/login/btn_logout.png"></a></li>
		<?php } ?>
            <!-- 최고관리자이면 관리자 페이지 버튼 출력 -->
            <?php if($__Context->logged_info->is_admin == 'Y'){ ?>
            <li><a href="<?php echo getUrl('','module','admin') ?>" onclick="window.open(this.href); return false;"><img src="/layouts/eond_rosso/img/login/btn_admin.gif" style="vertical-align:middle;"></a></li>
            <?php } ?>
	</ul>
</aside>
<!-- e:sitebar -->
<!--s:logo-->
			<div class="container-fluid logo"><a class="brand" href="<?php echo $__Context->li->index_url ?>"><?php if($__Context->li->htitle){;
echo $__Context->li->htitle;
}else{ ?>eond rosso<?php } ?></a></div><!--e:logo-->
<!--s:header-->
			<header class="navbar-inner" style="padding:0 4px;">
				<div class="container-fluid">
<div style="margin:5px 0 8px 0;overflow:hidden;float:left;">
<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['text']){ ?><nav class="pull-left">
<a class="btn btn-navbar" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?> style="width:12px;overflow:hidden;height:20px;padding:4px 8px;margin-left:2px"><?php echo $__Context->val1['link'] ?></a>
</nav><?php }} ?>
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" style="padding:4px 8px;margin-left:2px;float:left;"><i class="icon-sitemap"></i></a>
</div>
<!--s:nav(gnb)-->
				<nav class="gnb nav-collapse">
				<ul class="nav">
					
					<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['text']){ ?>
						<?php if($__Context->val1['link']!="||||"){ ?>
							<li class="<?php if($__Context->val1['list']){ ?>dropdown<?php };
if($__Context->val1['selected']){ ?> active<?php } ?>">
								<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'];
if($__Context->val1['list']){ ?> <b class="caret"></b><?php } ?></a>
								<?php if($__Context->val1['list']){ ?><ul class="dropdown-menu">
									<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?>
										<?php if($__Context->val2['link']!="----"){ ?>
											<li class="<?php if($__Context->val2['list']){ ?>dropdown-submenu<?php };
if($__Context->val2['selected']){ ?> active<?php } ?>">
												<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
												<?php if($__Context->val2['list']){ ?><ul class="dropdown-menu">
													<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?>
														<?php if($__Context->val3['link']!="----"){ ?>
															<li class="<?php if($__Context->val3['list']){ ?>dropdown-submenu<?php };
if($__Context->val3['selected']){ ?> active<?php } ?>">
																<a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
																<?php if($__Context->val3['list']){ ?><ul class="dropdown-menu">
																	<?php if($__Context->val3['list']&&count($__Context->val3['list']))foreach($__Context->val3['list'] as $__Context->key4=>$__Context->val4){;
if($__Context->val4['link']){ ?>
																		<?php if($__Context->val4['link']!="----"){ ?>
																			<li class="<?php if($__Context->val4['list']){ ?>dropdown-submenu<?php };
if($__Context->val4['selected']){ ?> active<?php } ?>">
																				<a href="<?php echo $__Context->val4['href'] ?>"<?php if($__Context->val4['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val4['link'] ?></a>
																			</li>
																		<?php }else{ ?>
																			<li class="divider"></li>
																		<?php } ?>
																	<?php }} ?>
																</ul><?php } ?>
															</li>
														<?php }else{ ?>
															<li class="divider"></li>
														<?php } ?>
													<?php }} ?>
												</ul><?php } ?>
											</li>
										<?php }else{ ?>
											<li class="divider"></li>
										<?php } ?>
									<?php }} ?>
								</ul><?php } ?>
							</li>
						<?php }else{ ?>
							<li class="divider-vertical"></li>
						<?php } ?>
					<?php }} ?>
				</ul>
							<ul class="nav pull-right">
								<?php if($__Context->li->twitter){ ?><li><a href="<?php echo $__Context->li->twitter ?>" target="_blank"><i class="icon-twitter-sign"></i></a></li><?php } ?>
								<li class="divider-vertical"></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<span><i class="icon-facebook-sign"></i></span>
									<b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										<div id="fb-root"></div>
										<script>(function(d, s, id) {
										  var js, fjs = d.getElementsByTagName(s)[0];
										  if (d.getElementById(id)) return;
										  js = d.createElement(s); js.id = id;
										  js.src = "//connect.facebook.net/ko_KR/all.js#xfbml=1";
										  fjs.parentNode.insertBefore(js, fjs);
										}(document, 'script', 'facebook-jssdk'));</script>
										<?php if($__Context->li->facebook){ ?><li><a href="<?php echo $__Context->li->facebook ?>" target="_blank"><i class="icon-thumbs-up"></i> Like this Website</a>
										<div class="span1 fb-like" data-href="<?php echo $__Context->li->facebook ?>" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false" data-colorscheme="dark"></div>
										</li><?php } ?>
										<li><a href="http://www.facebook.com/eondcom" target="_blank"><i class="icon-heart"></i> Like this Design</a>
										<div class="span1 fb-like" data-href="http://facebook.com/eondcom" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false" data-colorscheme="dark"></div>
										</li>
																			</ul>
								</li>
								<?php if($__Context->is_logged){ ?>
								<li class="divider-vertical"></li>
								<li class="dropdown">
		<?php if($__Context->is_logged){ ?><li id="message_list" class="dropdown">
			<!--#Meta:layouts/eond_rosso/js/communication.js--><?php $__tmp=array('layouts/eond_rosso/js/communication.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
			<?php if($__Context->is_logged){ ?>
				<?php 
					$__Context->oDB = &DB::getInstance();
					$__Context->query = $__Context->oDB->_query('select * from xe_member_message where receiver_srl = '.$__Context->logged_info->member_srl.' AND message_type = "R" ORDER BY  regdate DESC limit 0, 5');
					$__Context->result = $__Context->oDB->_fetch($__Context->query);
					$__Context->output = executeQueryArray('addons.message_alarm.getMessageCount', $__Context->aobj);
				 ?>
				<?php if(count($__Context->output->data) && !Mobile::isMobileCheckByAgent()){ ?><script>
					jQuery(function($){$(".navbar a").hover(function(){$("#message_list>a").tooltip('hide');}).tooltip({placement:"bottom",trigger:"manual",title:"<?php echo count($__Context->output->data);
echo $__Context->lang->tb_not_readed_message ?>"}).delay(500).queue(function(){$("#message_list>a").tooltip('show');}).delay(5000).queue(function(){$("#message_list>a").tooltip('hide');})});
				</script><?php } ?>
			<?php } ?>
									<a href="<?php echo getURL('act','dispCommunicationMessages') ?>" data-href="#" data-toggle="dropdown" class="dropdown-toggle">
									<i class="icon-envelope"></i> Me</a>
											<!--s:MessageBox-->
			<ul class="dropdown-menu" style="min-width:240px">
				<li class="nav-header">Message List</li>
				<?php if(is_array($__Context->result)==true){ ?>
					<?php if($__Context->result&&count($__Context->result))foreach($__Context->result as $__Context->key=>$__Context->val){ ?>
					<?php 
						$__Context->oMemberModel =& getModel('member');
						$__Context->member_info = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->val->sender_srl);
					 ?>
					<li class="readed">
						<a href="<?php echo getURL('act','dispCommunicationMessages','message_srl',$__Context->val->message_srl) ?>" class="popover-left" title="<?php echo strip_tags($__Context->val->title) ?>" data-content="<?php echo iconv_substr(strip_tags($__Context->val->content),0,100,'UTF-8') ?>" >
							<?php if($__Context->member_info->profile_image->src){ ?>
								<img src="<?php echo $__Context->member_info->profile_image->src ?>" class="img-polaroid profile_img" />
							<?php }else{ ?>
								<img src="/layouts/eond_rosso/img/profile.gif" class="img-polaroid profile_img" />
							<?php } ?>
							<span class="content">
								<span class="nickname">
									<?php echo $__Context->member_info->nick_name ?>
								</span>
								<span class="title">
									<?php echo strip_tags($__Context->val->title) ?>...
								</span>
							</span>
							<span class="clear" style="display:block"></span>
							<button type="button" onclick="doSendMessage('<?php echo $__Context->member_info->member_srl ?>','<?php echo $__Context->val->message_srl ?>');return false;" class="btn btn-mini reply_message"><i class="icon-share-alt"></i> <?php echo $__Context->lang->cmd_reply_message ?></button>
							<button type="button" class="btn btn-mini"><?php echo $__Context->lang->tb_more ?></button>
							<span class="clear" style="display:block"></span>
						</a>
					</li>
				<?php } ?>
				<li class="divider" style="border-bottom:1px solid #222;background-color:black;"></li>
				<li class="more"><a href="<?php echo getURL('act','dispCommunicationMessages') ?>"><?php echo $__Context->lang->tb_more ?></a></li>
				<?php }else{ ?>
					<?php 
						$__Context->oMemberModel =& getModel('member');
						$__Context->member_info = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->result->sender_srl);
					 ?>
					<li>
						<a href="<?php echo getURL('act','dispCommunicationMessages','message_srl',$__Context->result->message_srl) ?>" class="popover-left readed" rel="popover" title="<?php echo strip_tags($__Context->result->title) ?>" data-content="<?php echo substr(strip_tags($__Context->result->content),0,100) ?>" >
							<?php if($__Context->member_info->profile_image->src){ ?>
								<img src="<?php echo $__Context->member_info->profile_image->src ?>" class="img-polaroid profile_img" />
							<?php }else{ ?>
								<img src="/layouts/eond_rosso/img/profile.gif" class="img-polaroid profile_img" />
							<?php } ?>
							<span class="content">
								<span class="nickname">
									<?php echo $__Context->member_info->nick_name ?>
								</span>
								<span class="title">
									<?php echo strip_tags($__Context->result->title) ?>
								</span>
							</span>
							<span class="clear" style="display:block"></span>
							<button type="button" onclick="doSendMessage('<?php echo $__Context->member_info->member_srl ?>','<?php echo $__Context->val->message_srl ?>');return false;" class="btn btn-mini reply_message"><i class="icon-share-alt"></i> <?php echo $__Context->lang->cmd_reply_message ?></button>
							<button type="button" class="btn btn-mini"><i class="icon-eye-open"></i> <?php echo $__Context->lang->tb_more ?></button>
							<span class="clear" style="display:block"></span>
						</a>
					</li>
					<li class="divider"></li>
					<li class="more"><a href="<?php echo getURL('act','dispCommunicationMessages') ?>"><i class="icon-share-alt"></i> <?php echo $__Context->lang->tb_more ?></a></li>
				<?php } ?>
			</ul><!--e:MessageBox-->
			</li><?php } ?>
								<?php } ?>
							</ul>
						</nav><!--e:nav-->
						</div>
				</header><!--e:header-->
			</div>
		</hgroup><!--e:hgroup-->
<!-- s:container -->
<!--s:section-->
		<section class="container-fluid pull-left">
		<!--s:breadcrumb
		<ul class="breadcrumb visible-desktop margin-up"><li><a href="#"><i class="icon-map-marker"></i></a><span class="divider"><i class="icon-angle-right"></i></span></li><li><a href="#">Library</a><span class="divider"><i class="icon-angle-right"></i></span></li><li class="active">Data</li></ul><!--e:breadcrumb-->
		<article class="content"><?php echo $__Context->content ?></article>
		</section>
<!--e:section-->
<!--s:footer-->
		<footer class="" style="clear:both;">
		<nav class="fnb">
		</nav>
		<address class="info pull-left"><i class="icon-info-sign"></i> Copyright ⓒ <a href="http://eond.com" target="_blank"><b>eond.com</b></a> All Rights Reserved.</address><span class="pull-right info"><i class="icon-info-sign"></i> Layout by <a href="http://eond.com" target="_blank"><b>eond.com</b></a></span>
		</footer>
<!--e:footer-->
<!-- e:container -->