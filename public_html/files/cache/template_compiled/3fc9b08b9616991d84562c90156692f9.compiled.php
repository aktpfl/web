<?php if(!defined("__XE__"))exit;?>
<!--#Meta:/xe_official.js--><?php $__tmp=array('/xe_official.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/layout_photoGalleryA_Free/css/default.css--><?php $__tmp=array('layouts/layout_photoGalleryA_Free/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div id="bodyWrap">
	<div id="header">
		<h1><a href="<?php echo $__Context->layout_info->index_url ?>"><?php if($__Context->layout_info->logo_image){ ?><img src="<?php echo $__Context->layout_info->logo_image ?>" alt="home" /><?php }else{ ?><img src="/layouts/layout_photoGalleryA_Free/images/header_logo.gif" alt="home" /><?php } ?></a></h1>
		<ul id="gnb">
          <!-- main_menu 1차 시작 -->
            <?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key => $__Context->val){;
if($__Context->val['link']){ ?>
                <?php if($__Context->val['selected']){ ?>
                    <?php  $__Context->menu_1st = $__Context->val  ?>
                <?php } ?>
                <li <?php if($__Context->val['selected']){ ?>class="on"<?php } ?>><a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->val['open_window']=='Y'){ ?>onclick="window.open(this.href);return false;"<?php } ?>><?php echo $__Context->val['link'] ?></a></li>
            <?php };
} ?>
		</ul>
		<ul id="topnavi">
			<li>
				<?php if($__Context->is_logged){ ?>
					<a href="<?php echo getUrl('act','dispMemberLogout') ?>"><img src="/layouts/layout_photoGalleryA_Free/images/topnavi_logout.gif" alt="logout" /></a>
				<?php }else{ ?>
					<a href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><img src="/layouts/layout_photoGalleryA_Free/images/topnavi_login.gif" alt="login" /></a>
				<?php } ?>
				</li>
				<?php if(!$__Context->is_logged){ ?>
				<li><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><img src="/layouts/layout_photoGalleryA_Free/images/topnavi_member.gif" alt="member" /></a></li>
				<li><a href="<?php echo $__Context->layout_info->contact_url ?>"><img src="/layouts/layout_photoGalleryA_Free/images/topnavi_contact.gif" alt="contact" /></a></li>
				<?php }else{ ?>
				<li><a href="<?php echo getUrl('act','dispMemberInfo') ?>"><img src="/layouts/layout_photoGalleryA_Free/images/topnavi_mypage.gif" alt="mypage" /></a></li>
				<li><a href="<?php echo $__Context->layout_info->contact_url ?>"><img src="/layouts/layout_photoGalleryA_Free/images/topnavi_contact.gif" alt="contact" /></a></li>
				<?php } ?>
		</ul>
	</div>
	<div id="inside">
		<div class="welcome"><img src="/layouts/layout_photoGalleryA_Free/images/inside_welcome.gif"  alt="eyepress photo gallery welcome you to website." /></div>
		<div class="home"><a href="<?php echo $__Context->layout_info->index_url ?>"><img src="/layouts/layout_photoGalleryA_Free/images/inside_home.gif" alt="home" /></a></div>
	</div>
	<div id="contentbody">
		<div id="content">
			<div class="contentpage"><?php echo $__Context->content ?></div>
		</div>
		<div id="footer">
			<p class="copyright">
			<?php if($__Context->layout_info->copyright_image){ ?>
			<img src="<?php echo $__Context->layout_info->copyright_image ?>" alt="" />
			<?php }else{ ?>
			<img src="/layouts/layout_photoGalleryA_Free/images/footer_logo.gif" alt="eyepress copyright 2008-2010 eye-stopper. all right reserved" />
			<?php } ?>
			</p>
		</div>
	</div>
</div>
