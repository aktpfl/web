<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = "0";
$layout_info->layout = "gallery_layout";
$layout_info->type = "";
$layout_info->path = "./layouts/gallery_layout/";
$layout_info->title = "Gallery layout";
$layout_info->description = "
        pianoman2 
    ";
$layout_info->version = "0.2";
$layout_info->date = "20110210";
$layout_info->homepage = "http://www.xegears.com/question";
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = "";
$layout_info->license_link = "";
$layout_info->layout_type = "P";
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = "pianoman2";
$layout_info->author[0]->email_address = "hongjaeya@gmail.com";
$layout_info->author[0]->homepage = "http://www.xegears.com/question";
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->home_module = new stdClass;
$layout_info->extra_var->home_module->group = "";
$layout_info->extra_var->home_module->title = "첫페이지 모듈 mid";
$layout_info->extra_var->home_module->type = "text";
$layout_info->extra_var->home_module->value = $vars->home_module;
$layout_info->extra_var->home_module->description = "로고 클릭시 이동 모듈";
$layout_info->extra_var->logo_image = new stdClass;
$layout_info->extra_var->logo_image->group = "";
$layout_info->extra_var->logo_image->title = "로고이미지";
$layout_info->extra_var->logo_image->type = "image";
$layout_info->extra_var->logo_image->value = $vars->logo_image;
$layout_info->extra_var->logo_image->description = "레이아웃의 상단에 표시될 로고이미지를 입력하세요.";
$layout_info->extra_var->copyright = new stdClass;
$layout_info->extra_var->copyright->group = "";
$layout_info->extra_var->copyright->title = "하단 Copyright";
$layout_info->extra_var->copyright->type = "text";
$layout_info->extra_var->copyright->value = $vars->copyright;
$layout_info->extra_var->copyright->description = "Copyright 정보를 넣어주세요.";
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