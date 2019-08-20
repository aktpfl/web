<?php if(!defined("__XE__")) exit(); $widget_info = new stdClass;$widget_info->widget = "photoslider";$widget_info->path = "./widgets/photoslider/";$widget_info->title = "포토슬라이드 위젯";$widget_info->description = "게시판 이미지를 슬라이드로 출력하는 위젯입니다.";$widget_info->version = "0.1";$widget_info->date = "20131129";$widget_info->homepage = "";$widget_info->license = "";$widget_info->license_link = "";$widget_info->widget_srl = $widget_srl;$widget_info->widget_title = $widget_title;$widget_info->author[0] = new stdClass;$widget_info->author[0]->name = "orangetree";$widget_info->author[0]->email_address = "";$widget_info->author[0]->homepage = "";$widget_info->extra_var_count = "1";$widget_info->extra_var->module_srls = new stdClass;$widget_info->extra_var->module_srls->group = "";$widget_info->extra_var->module_srls->name = "대상 모듈";$widget_info->extra_var->module_srls->type = "module_srl_list";$widget_info->extra_var->module_srls->value = $vars->module_srls;$widget_info->extra_var->module_srls->description = "선택하신 모듈에 등록된 이미지를 대상으로 합니다.";$widget_info->extra_var_count = "6";$widget_info->extra_var->wide_count = new stdClass;$widget_info->extra_var->wide_count->group = "브라우져 크기에 따른 화면에 나타날 이미지 개수 설정입니다\n\n입력하지않으면 기본 설정이 적용됩니다";$widget_info->extra_var->wide_count->name = "브라우져가 가장 넓을때 한 화면에 보여질 이미지수";$widget_info->extra_var->wide_count->type = "text";$widget_info->extra_var->wide_count->value = $vars->wide_count;$widget_info->extra_var->wide_count->description = "화면에 보여질 이미지의 수를 정합니다.(기본 4개)";$widget_info->extra_var->count_1199 = new stdClass;$widget_info->extra_var->count_1199->group = "브라우져 크기에 따른 화면에 나타날 이미지 개수 설정입니다\n\n입력하지않으면 기본 설정이 적용됩니다";$widget_info->extra_var->count_1199->name = "이미지수";$widget_info->extra_var->count_1199->type = "text";$widget_info->extra_var->count_1199->value = $vars->count_1199;$widget_info->extra_var->count_1199->description = "브라우져 크기가 1199보다 작을때 한 화면에 보여줄 이미지 수.(기본:3) ";$widget_info->extra_var->count_979 = new stdClass;$widget_info->extra_var->count_979->group = "브라우져 크기에 따른 화면에 나타날 이미지 개수 설정입니다\n\n입력하지않으면 기본 설정이 적용됩니다";$widget_info->extra_var->count_979->name = "이미지수";$widget_info->extra_var->count_979->type = "text";$widget_info->extra_var->count_979->value = $vars->count_979;$widget_info->extra_var->count_979->description = "브라우져 크기가 979보다 작을때 한 화면에 보여줄 이미지 수.(기본:3) ";$widget_info->extra_var->count_768 = new stdClass;$widget_info->extra_var->count_768->group = "브라우져 크기에 따른 화면에 나타날 이미지 개수 설정입니다\n\n입력하지않으면 기본 설정이 적용됩니다";$widget_info->extra_var->count_768->name = "이미지수";$widget_info->extra_var->count_768->type = "text";$widget_info->extra_var->count_768->value = $vars->count_768;$widget_info->extra_var->count_768->description = "브라우져 크기가 768보다 작을때 한 화면에 보여줄 이미지 수.(기본:2, 태블릿 사이즈입니다) ";$widget_info->extra_var->count_479 = new stdClass;$widget_info->extra_var->count_479->group = "브라우져 크기에 따른 화면에 나타날 이미지 개수 설정입니다\n\n입력하지않으면 기본 설정이 적용됩니다";$widget_info->extra_var->count_479->name = "이미지수";$widget_info->extra_var->count_479->type = "text";$widget_info->extra_var->count_479->value = $vars->count_479;$widget_info->extra_var->count_479->description = "브라우져 크기가 479보다 작을때 한 화면에 보여줄 이미지 수.(기본:1, 모바일 사이즈입니다) ";$widget_info->extra_var->singleitem = new stdClass;$widget_info->extra_var->singleitem->group = "브라우져 크기에 따른 화면에 나타날 이미지 개수 설정입니다\n\n입력하지않으면 기본 설정이 적용됩니다";$widget_info->extra_var->singleitem->name = "한개의 이미지 슬라이드 사용설정";$widget_info->extra_var->singleitem->type = "select";$widget_info->extra_var->singleitem->value = $vars->singleitem;$widget_info->extra_var->singleitem->description = "화면에 한개의 이미지만 보이도록 설정합니다(기본:아니요) ";$widget_info->extra_var->singleitem->options["false"] = "아니요(기본)";$widget_info->extra_var->singleitem->options["true"] = "예";$widget_info->extra_var_count = "4";$widget_info->extra_var->order_target = new stdClass;$widget_info->extra_var->order_target->group = "슬라이드 설정";$widget_info->extra_var->order_target->name = "정렬 대상";$widget_info->extra_var->order_target->type = "select";$widget_info->extra_var->order_target->value = $vars->order_target;$widget_info->extra_var->order_target->description = "등록된 순서 또는 변경된 순서로 정렬을 할 수 있습니다.";$widget_info->extra_var->order_target->options["list_order"] = "최신 등록순";$widget_info->extra_var->order_target->options["update_order"] = "최근 변경순";$widget_info->extra_var->slide_count = new stdClass;$widget_info->extra_var->slide_count->group = "슬라이드 설정";$widget_info->extra_var->slide_count->name = "슬라이드 총 개수";$widget_info->extra_var->slide_count->type = "text";$widget_info->extra_var->slide_count->value = $vars->slide_count;$widget_info->extra_var->slide_count->description = "한 화면에 보여지는 이미지 개수가 아닌 전체 슬라이드 리스트 개수(기본:10개)";$widget_info->extra_var->slidespeed = new stdClass;$widget_info->extra_var->slidespeed->group = "슬라이드 설정";$widget_info->extra_var->slidespeed->name = "슬라이드 속도";$widget_info->extra_var->slidespeed->type = "text";$widget_info->extra_var->slidespeed->value = $vars->slidespeed;$widget_info->extra_var->slidespeed->description = "슬라이드의 속도를 설정합니다(기본:200)";$widget_info->extra_var->lazy_load = new stdClass;$widget_info->extra_var->lazy_load->group = "슬라이드 설정";$widget_info->extra_var->lazy_load->name = "lazy load 설정";$widget_info->extra_var->lazy_load->type = "select";$widget_info->extra_var->lazy_load->value = $vars->lazy_load;$widget_info->extra_var->lazy_load->description = "이미지의 로딩 속도를 늦추는 것으로 모바일 기계에서는 페이지 로딩속도를 올려주는 효과가 있습니다";$widget_info->extra_var->lazy_load->options["false"] = "사용하지 않음(기본)";$widget_info->extra_var->lazy_load->options["true"] = "사용";$widget_info->extra_var_count = "2";$widget_info->extra_var->thumbnail_type = new stdClass;$widget_info->extra_var->thumbnail_type->group = "이미지";$widget_info->extra_var->thumbnail_type->name = "이미지 생성 방법";$widget_info->extra_var->thumbnail_type->type = "select";$widget_info->extra_var->thumbnail_type->value = $vars->thumbnail_type;$widget_info->extra_var->thumbnail_type->description = "이미지 생성 방법을 선택할 수 있습니다. (crop : 꽉 채우기, ratio : 비율 맞추기)";$widget_info->extra_var->thumbnail_type->options["ratio"] = "Ratio (비율 맞추기:기본)";$widget_info->extra_var->thumbnail_type->options["crop"] = "Crop (채우기)";$widget_info->extra_var->imageborder = new stdClass;$widget_info->extra_var->imageborder->group = "이미지";$widget_info->extra_var->imageborder->name = "이미지 테두리색상";$widget_info->extra_var->imageborder->type = "text";$widget_info->extra_var->imageborder->value = $vars->imageborder;$widget_info->extra_var->imageborder->description = "이미지 테두리 색상을 입력하세요(기본:흰색, #RRGGBB형태:(예)#fff). 반드시 입력 형식에 맞춰 입력하세요"; ?>