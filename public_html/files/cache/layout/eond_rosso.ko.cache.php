<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = "";
$layout_info->layout = "eond_rosso";
$layout_info->type = "";
$layout_info->path = "./layouts/eond_rosso/";
$layout_info->title = "eond Rosso";
$layout_info->description = "이온디 갤러리용 레이아웃 입니다. HTML5/CSS3/부트스트랩을 활용한 반응형 레이아웃입니다. 질문은 이온디 홈페이지 질문 게시판에 올려주세요. ";
$layout_info->version = "0.2";
$layout_info->date = "00000000";
$layout_info->homepage = "";
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = "";
$layout_info->license_link = "";
$layout_info->layout_type = "P";
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = "정낙훈 (http://eond.com)";
$layout_info->author[0]->email_address = "eond@eond.com";
$layout_info->author[0]->homepage = "http://eond.com";
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->htitle = new stdClass;
$layout_info->extra_var->htitle->group = "";
$layout_info->extra_var->htitle->title = "타이틀";
$layout_info->extra_var->htitle->type = "text";
$layout_info->extra_var->htitle->value = $vars->htitle;
$layout_info->extra_var->htitle->description = "";
$layout_info->extra_var->index_url = new stdClass;
$layout_info->extra_var->index_url->group = "";
$layout_info->extra_var->index_url->title = "홈 페이지 URL";
$layout_info->extra_var->index_url->type = "text";
$layout_info->extra_var->index_url->value = $vars->index_url;
$layout_info->extra_var->index_url->description = "";
$layout_info->extra_var->twitter = new stdClass;
$layout_info->extra_var->twitter->group = "";
$layout_info->extra_var->twitter->title = "Twitter URL";
$layout_info->extra_var->twitter->type = "text";
$layout_info->extra_var->twitter->value = $vars->twitter;
$layout_info->extra_var->twitter->description = "트위터 주소를 입력하세요.";
$layout_info->extra_var->facebook = new stdClass;
$layout_info->extra_var->facebook->group = "";
$layout_info->extra_var->facebook->title = "Facebook URL";
$layout_info->extra_var->facebook->type = "text";
$layout_info->extra_var->facebook->value = $vars->facebook;
$layout_info->extra_var->facebook->description = "페이스북 주소를 입력하세요.";
$layout_info->extra_var_count = "4";
$layout_info->menu_count = "1";
$layout_info->menu = new stdClass;
$layout_info->default_menu = "main_menu";
$layout_info->menu->main_menu = new stdClass;
$layout_info->menu->main_menu->name = "main_menu";
$layout_info->menu->main_menu->title = "기본 메뉴";
$layout_info->menu->main_menu->maxdepth = "";
$layout_info->menu->main_menu->menu_srl = $vars->main_menu;
$layout_info->menu->main_menu->xml_file = "./files/cache/menu/".$vars->main_menu.".xml.php";
$layout_info->menu->main_menu->php_file = "./files/cache/menu/".$vars->main_menu.".php";