<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = "";
$layout_info->layout = "default";
$layout_info->type = "";
$layout_info->path = "./m.layouts/default/";
$layout_info->title = "XE 공식 사이트 모바일 레이아웃";
$layout_info->description = "
        XE 공식 모바일 레이아웃입니다.
        NAVER (developers@xpressengine.com) 
    ";
$layout_info->version = "1.7";
$layout_info->date = "20131127";
$layout_info->homepage = "http://xpressengine.com/";
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = "";
$layout_info->license_link = "";
$layout_info->layout_type = "M";
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = "NAVER";
$layout_info->author[0]->email_address = "developers@xpressengine.com";
$layout_info->author[0]->homepage = "http://xpressengine.com/";
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->index_title = new stdClass;
$layout_info->extra_var->index_title->group = "";
$layout_info->extra_var->index_title->title = "홈페이지 Title";
$layout_info->extra_var->index_title->type = "text";
$layout_info->extra_var->index_title->value = $vars->index_title;
$layout_info->extra_var->index_title->description = "";
$layout_info->extra_var->logo_image = new stdClass;
$layout_info->extra_var->logo_image->group = "";
$layout_info->extra_var->logo_image->title = "로고이미지";
$layout_info->extra_var->logo_image->type = "image";
$layout_info->extra_var->logo_image->value = $vars->logo_image;
$layout_info->extra_var->logo_image->description = "레이아웃의 상단에 표시될 로고이미지를 입력하세요. (세로길이가 28px인 투명 이미지가 가장 어울립니다)";
$layout_info->extra_var->index_url = new stdClass;
$layout_info->extra_var->index_url->group = "";
$layout_info->extra_var->index_url->title = "홈 페이지 URL";
$layout_info->extra_var->index_url->type = "text";
$layout_info->extra_var->index_url->value = $vars->index_url;
$layout_info->extra_var->index_url->description = "로고를 클릭시에 이동할 홈 페이지 URL을 입력해 주세요.";
$layout_info->extra_var_count = "3";
$layout_info->menu_count = "1";
$layout_info->menu = new stdClass;
$layout_info->default_menu = "main_menu";
$layout_info->menu->main_menu = new stdClass;
$layout_info->menu->main_menu->name = "main_menu";
$layout_info->menu->main_menu->title = "상단 메뉴";
$layout_info->menu->main_menu->maxdepth = "3";
$layout_info->menu->main_menu->menu_srl = $vars->main_menu;
$layout_info->menu->main_menu->xml_file = "./files/cache/menu/".$vars->main_menu.".xml.php";
$layout_info->menu->main_menu->php_file = "./files/cache/menu/".$vars->main_menu.".php";