<?php if(!defined("__XE__"))exit;?>
<!--#Meta:layouts/layout_photoGalleyA_sub/css/default.css--><?php $__tmp=array('layouts/layout_photoGalleyA_sub/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/layout_photoGalleyA_sub/css/menu.css--><?php $__tmp=array('layouts/layout_photoGalleyA_sub/css/menu.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/layout_photoGalleyA_sub/js/jquery.js--><?php $__tmp=array('layouts/layout_photoGalleyA_sub/js/jquery.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/layout_photoGalleyA_sub/js/menu.js--><?php $__tmp=array('layouts/layout_photoGalleyA_sub/js/menu.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script type="text/javascript">
(function($){
	$(document).ready(function () {
		$("div.topinfobody").addClass("alt");
		$('img.topinfofind').click(function(){
		$('div.topinfobody').fadeIn();										 
		$(this).addClass("active");	
		$(this).siblings("div.topinfobody").fadeIn();	
		});
		$(".close").click(function(){
			$("div.topinfobody").removeClass("active");												 									 
			$("div.topinfobody").fadeOut();
		});
	});
})(jQuery);
</script>
<div id="bodyWrap">
	<div id="header">
		<h1><a href="<?php echo $__Context->layout_info->index_url ?>"><?php if($__Context->layout_info->logo_image){ ?><img src="<?php echo $__Context->layout_info->logo_image ?>" alt="home" /><?php }else{ ?><img src="/layouts/layout_photoGalleyA_sub/images/header_logo.gif" alt="home" /><?php } ?></a></h1>	<div id="menu">
			<ul class="menu">
				<?php $__Context->_idx = 1 ?>
				<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key => $__Context->val){ ?>
				<?php if($__Context->val['selected']){;
$__Context->menu_1st = $__Context->val;
} ?>
				<?php if($__Context->val['selected']&&$__Context->val['url']==$__Context->mid){;
$__Context->_menu_depth=2;
$__Context->selected_menu=$__Context->val;
} ?>
				<?php if($__Context->val['link']){ ?>
				<li class="parent"><a href="<?php echo $__Context->val['href'] ?>"<?php if($__Context->val['open_window']=='Y'){ ?> onclick="window.open(this.href);return false;"<?php } ?> <?php if($__Context->val['selected']){ ?>class="on"<?php } ?>><?php if($__Context->val['text']==$__Context->val['link']){ ?><span><?php echo $__Context->val['text'] ?></span><?php }else{;
echo $__Context->val['link'];
} ?></a>
				<?php if($__Context->val['list']){ ?>
					<div>
						<ul>
							<?php if($__Context->val['list']&&count($__Context->val['list']))foreach($__Context->val['list'] as $__Context->k => $__Context->v){ ?>
							<?php if($__Context->val['link']){ ?>
							<?php  $__Context->val2 = $__Context->v;  ?>
							<li class="parent" <?php if($__Context->val2['list']){;
} ?>><a href="<?php echo $__Context->v['href'] ?>"<?php if($__Context->v['open_window']=='Y'){ ?> onclick="window.open(this.href);return false;"<?php } ?> <?php if($__Context->v['selected']){;
} ?>><?php if($__Context->v['text']==$__Context->v['link']){ ?><span><?php echo $__Context->v['text'] ?></span><?php }else{;
echo $__Context->v['link'];
} ?></a>
							<div>
							<?php if($__Context->v['list']){ ?>
							<ul>
								<?php if($__Context->v['list']&&count($__Context->v['list']))foreach($__Context->v['list'] as $__Context->k2 => $__Context->v2){ ?>
								<?php if($__Context->v['link']){ ?>
								<?php  $__Context->val3 = $__Context->v2;  ?>
								<li <?php if($__Context->val3['list']){;
} ?>><a href="<?php echo $__Context->v2['href'] ?>"<?php if($__Context->v2['open_window']=='Y'){ ?> onclick="window.open(this.href);return false;"<?php } ?> <?php if($__Context->v2['selected']){;
} ?>><?php if($__Context->v2['text']==$__Context->v2['link']){ ?><span><?php echo $__Context->v2['text'] ?></span><?php }else{;
echo $__Context->v2['link'];
} ?></a>
								</li>                
								<?php } ?>
								<?php } ?>						
							</ul>
								<?php } ?>	
							</div>
							</li>
							<?php } ?>
							<?php } ?>
						</ul>	
					</div>
				<?php } ?>
				</li>
				<?php $__Context->_idx++ ?>
				<?php } ?>
				<?php } ?> 
			</ul>
			<a class="dn" href="http://apycom.com/"></a>
		</div>
		<ul id="topnavi">
			<li>
				<?php if($__Context->is_logged){ ?>
					<a href="<?php echo getUrl('act','dispMemberLogout') ?>"><img src="/layouts/layout_photoGalleyA_sub/images/topnavi_logout.gif" alt="logout" /></a>
				<?php }else{ ?>
					<a href="#loginWindow" onclick="jQuery('#loginWindow').css('display','block');" accesskey="L"><img src="/layouts/layout_photoGalleyA_sub/images/topnavi_login.gif" alt="login" /></a>
				<?php } ?>
				</li>
				<?php if(!$__Context->is_logged){ ?>
				<li><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><img src="/layouts/layout_photoGalleyA_sub/images/topnavi_member.gif" alt="member" /></a></li>
				<li><a href="<?php echo $__Context->layout_info->contact_url ?>"><img src="/layouts/layout_photoGalleyA_sub/images/topnavi_contact.gif" alt="contact" /></a></li>
				<?php }else{ ?>
				<li><a href="<?php echo getUrl('act','dispMemberInfo') ?>"><img src="/layouts/layout_photoGalleyA_sub/images/topnavi_mypage.gif" alt="mypage" /></a></li>
				<li><a href="<?php echo $__Context->layout_info->contact_url ?>"><img src="/layouts/layout_photoGalleyA_sub/images/topnavi_contact.gif" alt="contact" /></a></li>
				<?php } ?>
		</ul>
	</div>
	<div id="inside">
		<div class="welcome">
			<!-- depth 1 -->
			<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key => $__Context->val){ ?>
				<?php if($__Context->val['selected']){;
$__Context->menu_depth1 = $__Context->val;
} ?>
			<?php } ?>
			<!-- depth 2 -->
			<?php if($__Context->menu_depth1){ ?>
				<?php if($__Context->menu_depth1['list']&&count($__Context->menu_depth1['list']))foreach($__Context->menu_depth1['list'] as $__Context->key => $__Context->val){ ?>
					<?php if($__Context->val['selected']){;
$__Context->menu_depth2 = $__Context->val;
} ?>
				<?php } ?>
			<?php } ?>
			<!-- depth 3 -->
			<?php if($__Context->menu_depth2){ ?>
				<?php if($__Context->menu_depth2['list']&&count($__Context->menu_depth2['list']))foreach($__Context->menu_depth2['list'] as $__Context->key => $__Context->val){ ?>
					<?php if($__Context->val['selected']){;
$__Context->menu_depth3 = $__Context->val;
} ?>
				<?php } ?>
			<?php } ?>
			<!-- depth 4 -->
			<?php if($__Context->menu_depth3){ ?>
				<?php if($__Context->menu_depth3['list']&&count($__Context->menu_depth3['list']))foreach($__Context->menu_depth3['list'] as $__Context->key => $__Context->val){ ?>
					<?php if($__Context->val['selected']){;
$__Context->menu_depth4 = $__Context->val;
} ?>
				<?php } ?>
			<?php } ?>
				<a href="<?php echo getSiteUrl() ?>">Home</a>
			<?php if($__Context->menu_depth1){ ?>
			  /  <a href="<?php echo $__Context->menu_depth1['href'] ?>"><?php echo $__Context->menu_depth1['text'] ?></a>
			<?php } ?>
			<?php if($__Context->menu_depth2){ ?>
			   / <a href="<?php echo $__Context->menu_depth2['href'] ?>"><?php echo $__Context->menu_depth2['text'] ?></a>
			<?php } ?>
			<?php if($__Context->menu_depth3){ ?>
			  /  <a href="<?php echo $__Context->menu_depth3['href'] ?>"><?php echo $__Context->menu_depth3['text'] ?></a>
			<?php } ?>
			<?php if($__Context->menu_depth4){ ?>
			  /  <a href="<?php echo $__Context->menu_depth4['href'] ?>"><?php echo $__Context->menu_depth4['text'] ?></a>
			<?php } ?>
		</div>
		<div class="topinfobtn"><?php if($__Context->layout_info->topinfobtn_image){ ?><img src="<?php echo $__Context->layout_info->topinfobtn_image ?>" alt="" class="topinfofind" /><?php }else{ ?><img src="/layouts/layout_photoGalleyA_sub/images/inside_topinfo.gif" alt="" class="topinfofind" /><?php } ?></div>
	</div>
	<div id="topinfo" class="topinfobody">
		<?php if($__Context->layout_info->topinfo_image){ ?><img src="<?php echo $__Context->layout_info->topinfo_image ?>" alt="" /><?php }else{ ?><img src="/layouts/layout_photoGalleyA_sub/images/topinfo_img.gif" alt="" /><?php } ?>
		<div class="close"><img src="/layouts/layout_photoGalleyA_sub/images/topinfo_close.gif" alt="close" /></div>
	</div>
	<div id="contentbody">
		<div id="content">
			<div class="contentpage"><?php echo $__Context->content ?></div>
		</div>
		<div id="footer">
			<div class="copyright">
			<?php if($__Context->layout_info->copyright_image){ ?>
			<img src="<?php echo $__Context->layout_info->copyright_image ?>" alt="" />
			<?php }else{ ?>
			<img src="/layouts/layout_photoGalleyA_sub/images/footer_logo.gif" alt="eyepress copyright 2008-2010 eye-stopper. all right reserved" />
			<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php if(!$__Context->is_logged){ ?>
    <?php  $__Context->member_config = MemberModel::getMemberConfig();  ?>
    <?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('layouts/layout_photoGalleyA_sub/filter','login.xml');$__xmlFilter->compile(); ?>
    <?php if($__Context->member_config->enable_openid=='Y'){;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('layouts/layout_photoGalleyA_sub/filter','openid_login.xml');$__xmlFilter->compile();
} ?>
    <!-- loginWindow -->
    <div id="loginWindow" class="loginWindow">
    <!-- class="loginWindow" | class="loginWindow open" -->
        <span class="modalWindow"></span>
        <div id="loginLayer" class="loginLayer loginTypeA">
            <button type="button" class="close" onclick="document.getElementById('loginWindow').style.display='none'" accesskey="X"><span>Close Login Layer</span></button>
			<h3><img src="/layouts/layout_photoGalleyA_sub/images/login_title.gif" alt="login" /></h3>
            <form action="" method="post" class="typeA" id="commonLogin" onsubmit="return procFilter(this, login)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                <fieldset>
                    <legend>XE Login</legend>
                    <dl>
                        <dt><label for="uid"><?php echo $__Context->lang->user_id ?></label></dt>
                        <dd><input name="user_id" type="text" class="inputText" id="uid" /></dd>
                        <dt><label for="upw"><?php echo $__Context->lang->password ?></label></dt>
                        <dd><input name="password" type="password" class="inputText" id="upw" /></dd>
                    </dl>
                    <!--p class="keep"><input name="keep_signed" type="checkbox" id="keepA" value="Y" class="inputCheck" onclick="if(this.checked) return confirm('<?php echo $__Context->lang->about_keep_signed ?>');"/><label for="keepA"><?php echo $__Context->lang->keep_signed ?></label></p-->
                    <span class="loginButton"><input name="" type="submit" value="" /></span>
                </fieldset>
            </form>
            <?php if($__Context->member_config->enable_openid=='Y'){ ?>
            <form action="./" method="post" class="typeB" id="openidLogin" onsubmit="return procFilter(this, openid_login)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                <fieldset>
                    <legend>OpenID Login</legend>
                    <dl>
                        <dt><label for="oid">Open ID</label></dt>
                        <dd><input name="openid" type="text" class="inputText" id="oid" /></dd>
                    </dl>
                    <span class="loginButton"><input name="" type="submit" value="" alt="로그인" /></span>
                </fieldset>
            </form>
            <?php } ?>
            <ul class="help">
                <li class="join"><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
				<li>|</li>
                <li class="find"><a href="<?php echo getUrl('act','dispMemberFindAccount') ?>"><?php echo $__Context->lang->cmd_find_member_account ?></a></li>
				<li>|</li>
                <li class="find"><a href="<?php echo getUrl('act','dispMemberResendAuthMail') ?>"><?php echo $__Context->lang->cmd_resend_auth_mail ?></a></li>
                <?php if($__Context->member_config->enable_openid=='Y'){ ?>
                <li class="typeA"><a href="#openidLogin" onclick="document.getElementById('loginLayer').className='loginLayer loginTypeB'">OpenID</a></li>
                <li class="typeB"><a href="#commonLogin" onclick="document.getElementById('loginLayer').className='loginLayer loginTypeA'">OpenID</a></li>
                <?php } ?>
            </ul>
            <button type="button" class="close" onclick="document.getElementById('loginWindow').style.display='none'" accesskey="X"><span>Close Login Layer</span></button>
        </div>
    </div>
    <!-- /loginWindow -->
<?php } ?>
