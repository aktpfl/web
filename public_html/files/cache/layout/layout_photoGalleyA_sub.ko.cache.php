<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = "";
$layout_info->layout = "layout_photoGalleyA_sub";
$layout_info->path = "./layouts/layout_photoGalleyA_sub/";
$layout_info->title = "Photo Gallery A_Sub";
$layout_info->description = "";
$layout_info->version = "1.0";
$layout_info->date = "00000000";
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->author[0]->name = "eyepress";
$layout_info->author[0]->email_address = "";
$layout_info->author[0]->homepage = "http://eyepress.co.kr/";
$layout_info->extra_var_count = "6";
$layout_info->extra_var->logo_image->group = "";
$layout_info->extra_var->logo_image->title = "로고이미지";
$layout_info->extra_var->logo_image->type = "image";
$layout_info->extra_var->logo_image->value = $vars->logo_image;
$layout_info->extra_var->logo_image->description = "레이아웃의 상단에 표시될 로고이미지를 입력하세요. (높이는 배경 포함 60픽셀이 적합합니다.)";
$layout_info->extra_var->index_url->group = "";
$layout_info->extra_var->index_url->title = "홈 페이지 URL";
$layout_info->extra_var->index_url->type = "text";
$layout_info->extra_var->index_url->value = $vars->index_url;
$layout_info->extra_var->index_url->description = "로고를 클릭시에 이동할 홈 페이지 URL을 입력해 주세요.";
$layout_info->extra_var->contact_url->group = "";
$layout_info->extra_var->contact_url->title = "contact URL";
$layout_info->extra_var->contact_url->type = "text";
$layout_info->extra_var->contact_url->value = $vars->contact_url;
$layout_info->extra_var->contact_url->description = "상단 우측 메뉴인 'contact' 버튼의 URL을 입력해 주세요.";
$layout_info->extra_var->topinfobtn_image->group = "";
$layout_info->extra_var->topinfobtn_image->title = "topinfo 버튼 이미지";
$layout_info->extra_var->topinfobtn_image->type = "image";
$layout_info->extra_var->topinfobtn_image->value = $vars->topinfobtn_image;
$layout_info->extra_var->topinfobtn_image->description = "로고 아래에 있는 'coworking' 버튼을 대체하는 이미지를 넣어주세요.";
$layout_info->extra_var->topinfo_image->group = "";
$layout_info->extra_var->topinfo_image->title = "topinfo 이미지";
$layout_info->extra_var->topinfo_image->type = "image";
$layout_info->extra_var->topinfo_image->value = $vars->topinfo_image;
$layout_info->extra_var->topinfo_image->description = "로고 아래에 있는 'coworking' 버튼 마우스 오버시 나올 이미지를 넣어주세요.(가로사이즈는 배경 포함 975px이 적절합니다.)";
$layout_info->extra_var->copyright_image->group = "";
$layout_info->extra_var->copyright_image->title = "카피라이트 이미지";
$layout_info->extra_var->copyright_image->type = "image";
$layout_info->extra_var->copyright_image->value = $vars->copyright_image;
$layout_info->extra_var->copyright_image->description = "푸터 카피라이트 부분에 들어갈 이미지를 넣어주세요.";
$layout_info->menu_count = "1";
$layout_info->default_menu = "main_menu";
$layout_info->menu->main_menu->name = "main_menu";
$layout_info->menu->main_menu->title = "상단 메뉴";
$layout_info->menu->main_menu->maxdepth = "";
$layout_info->menu->main_menu->menu_srl = $vars->main_menu;
$layout_info->menu->main_menu->xml_file = "./files/cache/menu/".$vars->main_menu.".xml.php";
$layout_info->menu->main_menu->php_file = "./files/cache/menu/".$vars->main_menu.".php";