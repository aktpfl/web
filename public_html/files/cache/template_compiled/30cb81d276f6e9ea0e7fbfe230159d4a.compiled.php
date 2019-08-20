<?php if(!defined("__XE__"))exit;
Context::loadLang('layouts/Imagemonster/lang'); ?>
<meta http-equiv="imagetoolbar" content="no" />
<?php
$i=0;
$selected_idx=0;
?>
<?php 
Context::addHtmlHeader('<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->');
Context::addHtmlHeader('<meta name="viewport" content="width=device-width, initial-scale=1">');
 ?>
<!--#Meta:layouts/Imagemonster/js/jquery-1.10.2.min.js--><?php $__tmp=array('layouts/Imagemonster/js/jquery-1.10.2.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Imagemonster/js/jquery-migrate-1.2.1.min.js--><?php $__tmp=array('layouts/Imagemonster/js/jquery-migrate-1.2.1.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Imagemonster/js/jquery-ui.js--><?php $__tmp=array('layouts/Imagemonster/js/jquery-ui.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/Imagemonster/js/respond.min.js--><?php $__tmp=array('layouts/Imagemonster/js/respond.min.js','body','lt IE 9','');Context::loadFile($__tmp);unset($__tmp); ?>
<script  type="text/javascript">
$(document).ready(function() {
	var height=$( window ).height(); 	
	$('body').css('minHeight',height+10);
	$('body').keydown(function(event) {
		keypressed(event);
   })
	
	$('body').mousedown(function(event) {
		mouseclick(event);
   })
	function mouseclick(event) {
	
		 if((event.button==2) || (event.button==3)) {
		  return false;
		 }
	}
	function keypressed(event) {
		var key=event.keyCode;
		  if(key==17) { return false; }
		 if(key==18) { return false; }
		 if(key==93) { return false; }
		 if(key==41) { return false; }
	}
	$('#gnb .m1').hover(
					   
		function () {
				if($(this).is(":last-child")){
					$('.lnb', this).css('right',0);
					$('.lnb a', this).css('text-align','right');
				}
				$('.lnb', this).css('height','auto');/*lnb의 height를 제대로 인식 못하시때문에*/
				$('.lnb', this).css('overflow','visible');
				$('.lnb', this).stop().slideDown(200);
				$('a.m1_a',this).animate({color: '<?php echo $__Context->layout_info->menu1_acolor ?>',backgroundColor: '<?php echo $__Context->layout_info->menu1_bcolor ?>'},500);
				
		}, 
		function () {
				$('.lnb', this).stop().slideUp(200);			
				$('a.m1_a',this).animate({backgroundColor: '<?php echo $__Context->layout_info->top_backcolor ?>', color: '<?php echo $__Context->layout_info->menu1_tcolor ?>'},500);
		}
	);
	$('.map_item').click(function(){
		if($('.map_item .arrow').is(':visible'))						
			$('ul', this).stop(true,true).slideToggle();
		
	})
	$('.sub_gnb .sub_li').click(function(){
						
		$('.sub_lnb', this).stop(true,true).slideToggle();
	})
});
</script>
<!--#Meta:layouts/Imagemonster/css/style.css--><?php $__tmp=array('layouts/Imagemonster/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Imagemonster','config.html') ?>
<div id="wrap" oncontextmenu= "return false" ondragstart="return false" onselectstart="return false">
	<?php if($__Context->layout_info->top_ad){ ?>
	<div class="top_ad">
	<a href="<?php echo $__Context->layout_info->top_ad_url ?>"><img src="<?php echo $__Context->layout_info->top_ad ?>"/></a>
	</div>
	<?php } ?>
   <div class="top">
 <!--  <div class="top_back"></div>-->
       <div class="header">
                
        <div class="logo" ><?php if($__Context->layout_info->logo_image){ ?><a href="<?php echo $__Context->layout_info->index_url ?>" >
        <img src="<?php echo $__Context->layout_info->logo_image ?>" alt="LOGO" title="LOGO" /></a><?php } ?></div><!--logo-->
		
   		<ul class="gnb" id="gnb">
		<?php $__Context->n=0; ?>
			<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){ ?><li <?php if($__Context->val1['selected']){ ?>class="m1 on"<?php }else{ ?>class="m1"<?php } ?> >
	       	<a class="m1_a" href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?> onfocus="this.blur();"><?php echo $__Context->val1['link'] ?></a>
		         <?php if($__Context->val1['selected']){ ?>
             	<?php  $__Context->menu_1st = $__Context->val1  ?>
                <?php  $__Context->selected_idx = $__Context->n ?>
        	     <?php } ?>
        		<?php if($__Context->val1['list']){ ?><div class="lnb" id="lnb"  >
		        	<ul ><?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li class="s1" <?php if($__Context->val2['selected']){ ?>class="on" <?php } ?>>
	                    <a href="<?php echo $__Context->val2['href'] ?>" class="s1_a"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?> onfocus="this.blur();"><?php echo $__Context->val2['text'] ?></a></li><?php } ?>
               		</ul>
               	</div><?php } ?>
				 <?php $__Context->n++; ?>           
			 </li><?php } ?>
        </ul><!-- //gnb -->
        <span class="menu_ico">
        	<span id="member"><?php if($__Context->is_logged){ ?><a onclick="jQuery('#memberProfile').slideToggle();">
				            <?php }else{ ?><a onclick="jQuery('.login_window').fadeIn('slow');">
                            <?php } ?><img src="/layouts/Imagemonster/images/member.png"/></a></span>
        	<span id="menu"><a onclick="jQuery('.sub_gnb').slideToggle();"><img src="/layouts/Imagemonster/images/menu.png"/></a></span>
        </span>
		
         <div id="memberProfile" class="memberProfile">
         <ul>
          <?php if($__Context->logged_info->menu_list&&count($__Context->logged_info->menu_list))foreach($__Context->logged_info->menu_list as $__Context->key=>$__Context->val){;
if($__Context->key !='dispMemberSavedDocument'){ ?><li>
          <a href="<?php echo getUrl('', 'act',$__Context->key, 'mid','') ?>"><?php echo Context::getLang($__Context->val) ?><span>></span></a>
          </li><?php }} ?>
              
          <?php if($__Context->layout_info->show_point=='yes'){ ?>
           <?php  $__Context->oPointModel = &getModel('point'); $__Context->point = $__Context->oPointModel->getPoint($__Context->logged_info->member_srl); $__Context->oModuleModel = &getModel('module');  $__Context->config = $__Context->oModuleModel->getModuleConfig('point'); $__Context->level = $__Context->oPointModel->getLevel($__Context->point, $__Context->config->level_step);  ?>
           <li><a><?php echo $__Context->lang->grade ?>: <font style="color: rgb(243, 5, 50);"><?php echo $__Context->level ?></font>&nbsp;</a></li>
           <li><a><?php echo $__Context->lang->point ?>: <font style="color: rgb(243, 5, 50);"><?php echo $__Context->point ?></font></a></li>
           <?php } ?>
           
           <li class="logout"><a href="<?php echo getUrl('act','dispMemberLogout') ?>" >LOGOUT</a></li>
        </ul>
        </div>
 	 </div><!-- //header-->
	</div><!-- //top -->
<div class="main_shadow"></div>
	<div class="middle_menu">
       <div class="search_box3">
            <form action="<?php echo getUrl() ?>" method="get"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
            <input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
            <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
            <input type="hidden" name="act" value="IS" />
                 <span class="inputbox">
                <input type="text" name="is_keyword" class="inputTypeText" value="<?php echo $__Context->is_keyword ?>" />
                <input type="image" src="/layouts/Imagemonster/images/search3.png" class="is_submit" value="<?php echo $__Context->lang->cmd_search ?>"  />
                </span>
            </form>
         </div><!-- search box3 end-->
         <span class="member_span">
        
		 <?php if($__Context->logged_info){ ?>
           <?php 
                $__Context->oDB = &DB::getInstance();
                $__Context->query = $__Context->oDB->_query('select count(*) as count from xe_member_message where receiver_srl = '.$__Context->logged_info->member_srl.' AND readed = "N" limit 0, 30');
                $__Context->result = $__Context->oDB->_fetch($__Context->query);
                $__Context->newcount=(int)$__Context->result->count ;
             ?>
			
             <a href="<?php echo getUrl('act','dispMemberInfo') ?>"><?php echo $__Context->lang->mypage ?>&nbsp;&bull;</a>
	         <a href="<?php echo getUrl('act','dispMemberLogout') ?>" >LOGOUT</a>
            
        <?php }else{ ?>
        	<a onclick="showmodal();">LOGIN&nbsp;&bull;</a>
            <a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>">JOININ</a>
        <?php } ?>
         <?php if($__Context->logged_info->is_admin==Y){ ?><a>(<?php echo $__Context->lang->module_srl ?> : <?php echo $__Context->module_info->module_srl ?>) &nbsp;</a><?php } ?>
        </span>
         <div  class="clinenews">
        <div style="margin-top:3px;"><img class="zbxe_widget_output" widget="newest_document" skin="line_ticker" colorset="white" order_target="list_order" order_type="desc" list_count="5" display_regdate="Y" module_srls="<?php echo $__Context->layout_info->module_srl_news ?>" /></div>
    </div>    
	</div>              
<div  class="main">
<!-- 모바일 메뉴-->
 <div class="sub_gnb">
        <ul>
			<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){ ?><li class="sub_li">
	       	<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?> onfocus="this.blur();" ><?php echo $__Context->val1['link'] ?></a>
            <?php if($__Context->val1['list']){ ?><span><img src="/layouts/Imagemonster/images/down.png" /></span><?php } ?>
		    	<?php if($__Context->val1['list']){ ?><ul  class="sub_lnb" >
                	<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li>
	                <a href="<?php echo $__Context->val2['href'] ?>" class="s1_a"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?> onfocus="this.blur();"><?php echo $__Context->val2['text'] ?></a>
                    </li><?php } ?>
               	</ul><?php } ?>
			 </li><?php } ?>
             <li class="sub_language">
             <a onclick="doChangeLangType('ko');return false;"<?php if($__Context->lang_type =='ko'){ ?>class="language_on"<?php } ?>><?php echo $__Context->lang_supported[ko] ?></a>
             <a onclick="doChangeLangType('en');return false;" <?php if($__Context->lang_type =='en'){ ?>class="language_on"<?php } ?>><?php echo $__Context->lang_supported[en] ?></a>
             </li>
       </ul><!-- //sub gnb -->
   </div>
    <div id="contentBody">
   
	<?php if($__Context->layout_info->layoutset == 'main'){ ?> 
	    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Imagemonster','main.html') ?>
    <?php }else{ ?> 
    	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Imagemonster','sub.html') ?>
    <?php } ?>
        
    </div><!--endof contentbody-->
</div><!-- //main -->
<div id="footer" class="footer">
	<?php $__Context->nfootmenu=count($__Context->foot_menu->list) ?>
    <?php  $__Context->i=1 ?>
    <div class="foot_menu_w_wrap">
         <div class="foot_menu_w"> 
    	     <?php if($__Context->nfootmenu>0){ ?><ul class="left_fmenu">
                    <?php if($__Context->foot_menu->list&&count($__Context->foot_menu->list))foreach($__Context->foot_menu->list as $__Context->key => $__Context->val){ ?><li><a href="<?php echo $__Context->val['href'] ?>" title="<?php echo $__Context->val['link'] ?>"><?php echo $__Context->val['link'] ?></a><?php if($__Context->nfootmenu != $__Context->i){ ?><span class="vbar"}>|</span><?php } ?></li>
                    <?php  $__Context->i++ ?>
                   
                    <?php } ?>
             </ul><?php } ?>
             <span class="right_fcopy">
             <span class="langueage_foot">
               <a onclick="doChangeLangType('ko');return false;"><img src="/layouts/Imagemonster/images/korea.png" style="vertical-align:middle" /></a>
               <a onclick="doChangeLangType('en');return false;"><img src="/layouts/Imagemonster/images/usa.png" /></a>
             </span>
                 <a><?php echo $__Context->lang->copyright ?>  <?php echo $__Context->layout_info->copyright ?>&nbsp;<?php echo $__Context->lang->copyright1 ?></a>
              </span>
   		</div></div>
	<?php if($__Context->layout_info->foot_map_select=='yes'){ ?><div class="footer_sitemap">
        <?php if(!$__Context->layout_info->foot_title1){;
$__Context->layout_info->foot_title1="Customer";
} ?>
        <?php if(!$__Context->layout_info->foot_title2){;
$__Context->layout_info->foot_title2="QuickMenu";
} ?>
        <?php if(!$__Context->layout_info->foot_title3){;
$__Context->layout_info->foot_title3="Contact";
} ?>
        <?php if(!$__Context->layout_info->foot_title4){;
$__Context->layout_info->foot_title4="Family Site";
} ?>
    	<ul class="maptable" >
        <li class="map_item">
        	<?php if($__Context->layout_info->foot_logo_select=="logo"){ ?>
                <a href="<?php echo $__Context->layout_info->index_url ?>" ><img src="<?php echo $__Context->layout_info->foot_logo ?>" ></a>
            <?php }else{ ?>
	            <p class="mapitem_title"><?php echo $__Context->layout_info->foot_title1 ?><span class="arrow"><img src="/layouts/Imagemonster/images/down.png" /></span></p>
    		    <ul>
    	    		<?php if($__Context->quick_menu1->list&&count($__Context->quick_menu1->list))foreach($__Context->quick_menu1->list as $__Context->key=>$__Context->val){ ?><li><a href="<?php echo $__Context->val['href'] ?>" title="<?php echo $__Context->val['link'] ?>"><?php echo $__Context->val['link'] ?></a></li>
	    	        <?php } ?>
				</ul>
            <?php } ?>
        </li>
        <li class="map_item"> <p class="mapitem_title"><?php echo $__Context->layout_info->foot_title2 ?><span class="arrow"><img src="/layouts/Imagemonster/images/down.png" /></span></p>
        <ul>
        	<?php if($__Context->quick_menu2->list&&count($__Context->quick_menu2->list))foreach($__Context->quick_menu2->list as $__Context->key=>$__Context->val){ ?><li><a href="<?php echo $__Context->val['href'] ?>" title="<?php echo $__Context->val['link'] ?>"><?php echo $__Context->val['link'] ?></a></li>
            <?php } ?>
          </ul>
		</li>
        <li class="map_item"> <p class="mapitem_title"><?php echo $__Context->layout_info->foot_title3 ?><span class="arrow"><img src="/layouts/Imagemonster/images/down.png" /></span></p>
        	<ul>
  	        <?php if($__Context->layout_info->company_name){ ?><li><a><?php echo $__Context->lang->companyname ?>:&nbsp;<?php echo $__Context->layout_info->company_name ?></a></li><?php } ?>
        	<?php if($__Context->layout_info->tel){ ?><li><a>TEL: <?php echo $__Context->layout_info->tel ?></a></li><?php } ?>
            <?php if($__Context->layout_info->fax){ ?><li><a>FAX: <?php echo $__Context->layout_info->fax ?></a></li><?php } ?>
            <?php if($__Context->layout_info->email){ ?><li><a>EMAIL : <?php echo $__Context->layout_info->email ?></a></li><?php } ?>
            <?php if($__Context->layout_info->address){ ?><li ><a><?php echo $__Context->layout_info->address ?></a></li><?php } ?>
			<?php if($__Context->layout_info->reg_number){ ?><li><a><?php echo $__Context->lang->reg_number1 ?> : <?php echo $__Context->layout_info->reg_number ?></a></li><?php } ?>
            <?php if($__Context->layout_info->reg_number2){ ?><li><a><?php echo $__Context->lang->reg_number2 ?> : <?php echo $__Context->layout_info->reg_number2 ?></a></li><?php } ?>
            </ul>
           <!-- <?php if($__Context->layout_info->copyright){ ?><p  ><?php echo $__Context->lang->copyright ?>  <?php echo $__Context->layout_info->copyright;
echo $__Context->lang->copyright1 ?></p><?php } ?>-->
        </li>
        <li class="map_item"> <p class="mapitem_title"><?php echo $__Context->layout_info->foot_title4 ?><span class="arrow"><img src="/layouts/Imagemonster/images/down.png" /></span></p>
       		<ul>
            <?php if($__Context->layout_info->foot_familysite=='yes'){ ?>
                    <?php if($__Context->family_menu->list&&count($__Context->family_menu->list))foreach($__Context->family_menu->list as $__Context->key => $__Context->val){ ?>
                	 <li><a href="<?php echo $__Context->val['href'] ?>" target="_blank"><?php echo $__Context->val['link'] ?></a></li>
			        <?php } ?>
            <?php }else{ ?>
            	<li class="sns">
            	<a href="<?php echo $__Context->layout_info->sns_metoday ?>"><img src="/layouts/Imagemonster/images/meto.png" /></a>
	            <a href="<?php echo $__Context->layout_info->sns_facebook ?>"><img src="/layouts/Imagemonster/images/facebook.png" /></a>
    	        <a href="<?php echo $__Context->layout_info->sns_twitter ?>"><img src="/layouts/Imagemonster/images/twitter.png" /></a>
        	    </li>
             <?php } ?>
            </ul>
    	  </li>
		</ul><!-- maptable-->
    </div><?php } ?></div><!--end of footer-->
</div><!-- //#wrap -->
<script type="text/javascript">
var menuidx=0;
jQuery(function($){
if('<?php echo $__Context->XE_VALIDATOR_MESSAGE ?>'&& ('<?php echo $__Context->XE_VALIDATOR_ID ?>'== 'layouts/imagemonster/login_modal/1'))
	{
		$('.login_window').fadeIn('slow');
	}
});
function showmodal()
{
	if('<?php echo $__Context->XE_VALIDATOR_MESSAGE ?>'&& ('<?php echo $__Context->XE_VALIDATOR_ID ?>'== 'layouts/imagemonster/login_modal/1'))
	{
		document.getElementById('error').style.display ="none";
	}	
	$('.login_window').fadeIn('slow');	
}
</script>
<!-- login modal window-->
<?php $__Context->member_config=MemberModel::getMemberConfig();$__Context->identifierForm->name=$__Context->member_config->identifier; ?> 
<?php if(!$__Context->is_logged){ ?><div class="login_window" >
	<div class="login_box">
    	
	    <div class="login_title">LOGIN <img src="/layouts/Imagemonster/images/colse2.gif" class="close" onclick="jQuery('.login_window').fadeOut('slow')" /> 
	    </div>
		<div class="login_content">
                       
            <?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'layouts/imagemonster/login_modal/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>" >
			<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
			</div><?php } ?>    
    
			<?php Context::addJsFile("./files/ruleset/login.xml", FALSE, "", 0, "body", TRUE, "") ?><form id="fo_member_login" action="./" method="post" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@login" />
			<input type="hidden" name="act" value="procMemberLogin" />
			<input type="hidden" name="success_return_url" value="<?php echo $__Context->referer_url ?>" />
			<input type="hidden" name="xe_validator_id" value="layouts/imagemonster/login_modal/1" />            
                    <table class="id_pw_wrap">
                    <colgroup>
                    <col width="20%" />
                    <col width="80%" />
                    </colgroup>
                    <tr>
                    <td><label for="user_id" style="cursor:pointer;">EMAIL</label></td>
                    <td><input name="user_id" type="text" id="user_id" class="IdPWD" /></td>
                    </tr>
                    <tr>
                    <td><label for="password" style="cursor:pointer;">PASSWORD</label></td>
					<td><input name="password" type="password"  class="IdPWD" /></td>
                    </tr>
                    <tr><td></td>
                    <td style="padding-top:0.5em"><input name="keep_signed" id="keep_signed" type="checkbox" value="Y" onclick="if(this.checked) return confirm('<?php echo $__Context->lang->about_keep_signed ?>');" />
						<label for="keep_signed" style="cursor:pointer;"><?php echo $__Context->lang->keep_login ?></label>
						<input name="" type="submit" value="<?php echo $__Context->lang->submit_login ?>" class="submit" />
                     </td>
                     </tr>
                    </table>
				</form>
				
				<div class="btn_nav">
					<a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->signup ?></a>
					<a href="<?php echo getUrl('act','dispMemberFindAccount') ?>"><?php echo $__Context->lang->findID ?></a>
                    <a href="<?php echo getUrl('act','dispMemberResendAuthMail') ?>"><?php echo $__Context->lang->authMail ?></a>
				</div>
			</div>
		</div>
</div><?php } ?>
