<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = "";
$layout_info->layout = "layout_photoGalleryA_Free";
$layout_info->type = "";
$layout_info->path = "./layouts/layout_photoGalleryA_Free/";
$layout_info->title = "Photo Gallery A_Free";
$layout_info->description = "photoGalleryA Free형 레이아웃입니다.";
$layout_info->version = "1.0";
$layout_info->date = "20110113";
$layout_info->homepage = "http://eyepress.co.kr";
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = "";
$layout_info->license_link = "";
$layout_info->layout_type = "P";
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = "eyepress";
$layout_info->author[0]->email_address = "";
$layout_info->author[0]->homepage = "http://eyepress.co.kr/";
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->logo_image = new stdClass;
$layout_info->extra_var->logo_image->group = "";
$layout_info->extra_var->logo_image->title = "로고이미지";
$layout_info->extra_var->logo_image->type = "image";
$layout_info->extra_var->logo_image->value = $vars->logo_image;
$layout_info->extra_var->logo_image->description = "레이아웃의 상단에 표시될 로고이미지를 입력하세요.";
$layout_info->extra_var->index_url = new stdClass;
$layout_info->extra_var->index_url->group = "";
$layout_info->extra_var->index_url->title = "홈 페이지 URL";
$layout_info->extra_var->index_url->type = "text";
$layout_info->extra_var->index_url->value = $vars->index_url;
$layout_info->extra_var->index_url->description = "로고를 클릭시에 이동할 홈 페이지 URL을 입력해 주세요.";
$layout_info->extra_var->contact_url = new stdClass;
$layout_info->extra_var->contact_url->group = "";
$layout_info->extra_var->contact_url->title = "contact URL";
$layout_info->extra_var->contact_url->type = "text";
$layout_info->extra_var->contact_url->value = $vars->contact_url;
$layout_info->extra_var->contact_url->description = "상단 우측 메뉴인 contact 버튼의 URL을 입력해 주세요.";
$layout_info->extra_var->copyright_image = new stdClass;
$layout_info->extra_var->copyright_image->group = "";
$layout_info->extra_var->copyright_image->title = "카피라이트 이미지";
$layout_info->extra_var->copyright_image->type = "image";
$layout_info->extra_var->copyright_image->value = $vars->copyright_image;
$layout_info->extra_var->copyright_image->description = "푸터 카피라이트 부분에 들어갈 이미지를 넣어주세요.";
$layout_info->extra_var_count = "4";
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