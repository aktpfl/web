<?php if(!defined("__XE__"))exit;?><script type="text/javascript">
jQuery(function($){
	var cssUrl;
	responseCss();
	
	
	$(window).resize(function(){
		responseCss();
	});
	function responseCss(){
		swidth = parseInt($(this).width());
		
		
		if (swidth>=769 ) {//1199
			<?php if($__Context->layout_info->layoutset=='sub1'){ ?>
				$('#columnRight').css('width','100%').css('float','none');
			<?php }elseif($__Context->layout_info->layoutset=='sub2'){ ?>
				$('#columnLeft').css('width','17%').css('display','block').css('float','left');
				$('#columnRight').css('width','79%').css('float','right');
			<?php } ?>
		}else
		{
			$('#columnLeft').css('width','0').css('display','none');
			$('#columnRight').css('width','100%').css('float','none');
		}
	}
	
});
</script>
<?php  $__Context->menuset=0 ?>
<?php if($__Context->layout_info->layoutset=='sub2'){ ?><div id="columnLeft">
	<div class="side_menubar">
    <?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key=>$__Context->val){ ?>
    <?php if($__Context->val['selected'] ){ ?> 
        <div style="margin-bottom:70px;">
        <a  href="<?php echo $__Context->menu_1st['href'] ?>" target="_blank" class="side_1menu"><?php echo $__Context->menu_1st['link'] ?></a>
        <?php if($__Context->menu_1st['list']){ ?><ul class="side_lnb">
            <?php  $__Context->class_on=0 ?>
             
            <?php if($__Context->menu_1st['list']&&count($__Context->menu_1st['list']))foreach($__Context->menu_1st['list'] as $__Context->key2=>$__Context->val2){ ?><li><?php if($__Context->val2['selected'] ){;
$__Context->class_on=1;
} ?>
                <?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['selected'] ){ ?>  <?php $__Context->class_on=0;
};
} ?>
        
             <a href="<?php echo $__Context->val2['href'] ?>" <?php if($__Context->class_on){ ?>class="on" <?php }elseif($__Context->val2['selected']){ ?> class="on_font" <?php };
if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?> ><span class="bull">&bull;</span><?php echo $__Context->val2['link'] ?></a>
                <?php if($__Context->val2['list']){ ?><ul>
                   <?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li ><a href="<?php echo $__Context->val3['href'] ?>" <?php if($__Context->val3['selected'] ){ ?>class="on"<?php };
if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?> ><span class="bull">&bull;</span><?php echo $__Context->val3['link'] ?></a></li><?php } ?>
                </ul><?php } ?> 
                <?php $__Context->class_on=0 ?>
            </li><?php } ?>
       </ul><?php } ?>
       </div>
	  	<?php  $__Context->menuset=1 ?>
    <?php } ?>
    <?php } ?>  
    
    
    <?php if($__Context->quick_menu1->list&&count($__Context->quick_menu1->list))foreach($__Context->quick_menu1->list as $__Context->key=>$__Context->val){;
if(($__Context->layout_info->layoutset=='sub2')&&($__Context->menuset!=1)){ ?>
    <?php if($__Context->val['selected'] ){ ?>
        <?php if(!$__Context->layout_info->foot_title1){;
$__Context->layout_info->foot_title1="Customer";
} ?>
        
        <div style="margin-bottom:70px;">
        <a  class="side_1menu"><?php echo $__Context->layout_info->foot_title1 ?></a>
        <?php if($__Context->quick_menu1->list){ ?><ul class="side_lnb">
        <?php  $__Context->class_on=0 ?>
         
        <?php if($__Context->quick_menu1->list&&count($__Context->quick_menu1->list))foreach($__Context->quick_menu1->list as $__Context->key=>$__Context->val){ ?><li><?php if($__Context->val['selected'] ){;
$__Context->class_on=1;
} ?>
         <a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->class_on){ ?>class="on"<?php };
if($__Context->val['open_window']=='Y'){ ?> target="_blank"<?php } ?> >
            <span class="bull">&bull;</span><?php echo $__Context->val['link'] ?></a>
            <?php  $__Context->class_on=0 ?>
        </li><?php } ?>
        </ul><?php } ?>
        
        </div>
		<?php  $__Context->menuset=1 ?>
	<?php } ?>
    <?php }} ?>  
    
    
    <?php if($__Context->quick_menu2->list&&count($__Context->quick_menu2->list))foreach($__Context->quick_menu2->list as $__Context->key=>$__Context->val){;
if(($__Context->layout_info->layoutset=='sub2')&&($__Context->menuset!=1)){ ?>
    <?php if($__Context->val['selected'] ){ ?> 
        <?php if(!$__Context->layout_info->foot_title1){;
$__Context->layout_info->foot_title2="QuickMenu";
} ?>
        
        <div style="margin-bottom:70px;">
        <a  class="side_1menu"><?php echo $__Context->layout_info->foot_title2 ?></a>
        <?php if($__Context->quick_menu2->list){ ?><ul class="side_lnb">
            <?php  $__Context->class_on=0 ?>
             
            <?php if($__Context->quick_menu2->list&&count($__Context->quick_menu2->list))foreach($__Context->quick_menu2->list as $__Context->key=>$__Context->val){ ?><li><?php if($__Context->val['selected'] ){;
$__Context->class_on=1;
} ?>
             <a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->class_on){ ?>class="on"<?php };
if($__Context->val['open_window']=='Y'){ ?> target="_blank"<?php } ?> >
                <span class="bull">&bull;</span><?php echo $__Context->val['link'] ?></a>
                <?php  $__Context->class_on=0 ?>
            </li><?php } ?>
        </ul><?php } ?>
        </div>
	    <?php  $__Context->menuset=1 ?>
    <?php } ?>
    <?php }} ?>  
    
    
    <?php if($__Context->foot_menu->list&&count($__Context->foot_menu->list))foreach($__Context->foot_menu->list as $__Context->key=>$__Context->val){;
if(($__Context->layout_info->layoutset=='sub2')&&($__Context->menuset!=1)){ ?>
    <?php if($__Context->val['selected'] ){ ?> 
        <?php if(!$__Context->layout_info->foot_title1){;
$__Context->layout_info->footmenu_title="footer 메뉴";
} ?> 
        
        <div style="margin-bottom:70px;">
        <a  class="side_1menu"><?php echo $__Context->layout_info->footmenu_title ?></a>
        <?php if($__Context->foot_menu->list){ ?><ul class="side_lnb">
            <?php  $__Context->class_on=0 ?>
             
            <?php if($__Context->foot_menu->list&&count($__Context->foot_menu->list))foreach($__Context->foot_menu->list as $__Context->key=>$__Context->val){ ?><li><?php if($__Context->val['selected'] ){;
$__Context->class_on=1;
} ?>
             <a href="<?php echo $__Context->val['href'] ?>" <?php if($__Context->class_on){ ?>class="on"<?php };
if($__Context->val['open_window']=='Y'){ ?> target="_blank"<?php } ?> >
                <span class="bull">&bull;</span><?php echo $__Context->val['link'] ?></a>
                <?php  $__Context->class_on=0 ?>
            </li><?php } ?>
        </ul><?php } ?>
        
        </div>
	    <?php  $__Context->menuset=1 ?>
    <?php } ?>
    <?php }} ?>  
    
       	<!--사이드 위젯만들기0-->
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/Imagemonster','side_widget.html') ?>
	</div><!-- side_menubar-->
</div><?php } ?><!-- columnleft-->
<div id="columnRight">
    <?php if($__Context->layout_info->contentbantop){ ?><div class="content_banner" >
         <a href="<?php echo $__Context->layout_info->contentbantop_url ?>"><img src="<?php echo $__Context->layout_info->contentbantop ?>" alt="<?php echo $__Context->layout_info->contentbantop_alt ?>"  /></a>
    </div><?php } ?>
    <?php if($__Context->layout_info->contentwidtop){ ?><div class="contentwidtop"><?php echo $__Context->layout_info->contentwidtop ?></div><?php } ?>
    <?php echo $__Context->content ?>
    <?php if($__Context->layout_info->contentwidbot){ ?><div class="contentwidbot"><?php echo $__Context->layout_info->contentwidbot ?></div><?php } ?>
    <?php if($__Context->layout_info->contentbanbot){ ?><div class="content_banner" >
         <a href="<?php echo $__Context->layout_info->contentbanbot_url ?>"><img src="<?php echo $__Context->layout_info->contentbanbot ?>" alt="<?php echo $__Context->layout_info->contentbanbot_alt ?>" /></a>
    </div><?php } ?>
</div><!--end of columnRight-->
