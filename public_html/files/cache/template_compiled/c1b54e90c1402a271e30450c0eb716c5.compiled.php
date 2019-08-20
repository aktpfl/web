<?php if(!defined("__XE__"))exit;?>
<?php if(!($__Context->layout_info->top_backcolor)){;
$__Context->layout_info->top_backcolor = "#222";
} ?>
<?php if(!($__Context->layout_info->layout_acolor_set)){;
$__Context->layout_info->layout_acolor_set = "#FC6E6E";
} ?>
<?php if(!($__Context->layout_info->menu1_tcolor)){;
$__Context->layout_info->menu1_tcolor = "#000";
} ?>
<?php if(!($__Context->layout_info->menu1_bcolor)){;
$__Context->layout_info->menu1_bcolor = "#000";
} ?>
<?php if(!($__Context->layout_info->menu1_acolor)){;
$__Context->layout_info->menu1_acolor = "#fff";
} ?>
<?php if(!($__Context->layout_info->menu2_acolor)){;
$__Context->layout_info->menu2_acolor = "red";
} ?>
<?php if(!($__Context->layout_info->menusub_acolor)){;
$__Context->layout_info->menusub_acolor = "#0fccd8";
} ?>
<?php if(!($__Context->layout_info->foot_uplinecolor)){;
$__Context->layout_info->foot_uplinecolor = "#555555";
} ?>
<?php if(!($__Context->layout_info->foot_tcolor)){;
$__Context->layout_info->foot_tcolor = "#fff";
} ?>
<?php if(!($__Context->layout_info->foot_bcolor)){;
$__Context->layout_info->foot_bcolor = "#fff";
} ?>
<?php if(!($__Context->layout_info->foot_linecolor)){;
$__Context->layout_info->foot_linecolor = "#ddd";
} ?>
<?php if(!($__Context->layout_info->sidetitle_bcolor)){;
$__Context->layout_info->sidetitle_bcolor = "#F54949";
} ?>
<?php if(!($__Context->layout_info->sidetitle_tcolor)){;
$__Context->layout_info->sidetitle_tcolor = "#fff";
} ?>
<style type="text/css">
#wrap .top{background-color:<?php echo $__Context->layout_info->top_backcolor ?>}
.gnb li.m1 a.m1_a{color:<?php echo $__Context->layout_info->menu1_tcolor ?>}
.gnb li.m1 a.m1_a:hover{	color:<?php echo $__Context->layout_info->menu1_acolor ?>; background-color:<?php echo $__Context->layout_info->menu1_bcolor ?> }
.side_lnb a:hover, .side_lnb li.on a:hover{ color:<?php echo $__Context->layout_info->layout_acolor_set ?>; font-weight:bold}
<?php if($__Context->layout_info->menu1_bcolor=='#fff' || $__Context->layout_info->menu1_bcolor=='#ffffff' ){ ?>
#gnb .lnb ul{background-color:#f3f3f3}
<?php }else{ ?>
#gnb .lnb ul{background-color:<?php echo $__Context->layout_info->menu1_bcolor ?>}
<?php } ?>
.gnb .lnb  a{color:<?php echo $__Context->layout_info->menu1_acolor ?>;}
.gnb .lnb  a:hover{color:<?php echo $__Context->layout_info->menu2_acolor ?>;}
<?php if($__Context->layout_info->contentwidtop){ ?>
.contentwidtop
{	width:<?php echo $__Context->layout_info->contentwidtop_width ?>px;
	<?php if($__Context->layout_info->contentwidtop_b=="yes"){ ?>
	border-top:solid 1px #ccc;
	border-bottom:solid 1px #ccc;
	<?php } ?>
	margin:20px  auto;
	padding:0 5px;
}
<?php } ?>
<?php if( $__Context->layout_info->contentwidbot){ ?>
.contentwidbot
{	width:<?php echo $__Context->layout_info->contentwidbot_width ?>px;
	<?php if($__Context->layout_info->contentwidbot_b=="yes"){ ?>
	border-top:solid 1px #ccc;
	border-bottom:solid 1px #ccc;
	<?php } ?>
	margin:20px auto;
	padding:0 5px;
}
<?php } ?>
.main .sub_lnb  a:hover{color:<?php echo $__Context->layout_info->menusub_acolor ?>}
/*.side_menubar .side_1menu{color:<?php echo $__Context->layout_info->sidetitle_tcolor ?>; background-color:<?php echo $__Context->layout_info->sidetitle_bcolor ?>}*/
.footer	a,.footer .footer_sitemap p, .footer .foot_menu_w p, .vbar{color:<?php echo $__Context->layout_info->foot_tcolor ?>;} 
.footer{background-color:<?php echo $__Context->layout_info->foot_bcolor ?>;}
.footer .foot_menu_w_wrap{border-bottom:solid 1px <?php echo $__Context->layout_info->foot_linecolor ?>}
<?php if($__Context->layout_info->top_ad){ ?>
.top_ad{background-color:<?php echo $__Context->layout_info->top_ad_color ?>}
<?php } ?>
</style>
