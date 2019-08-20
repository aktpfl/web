// 이 자바스크립트는 우야노님(uyano.com)이 배포하신 롤오버 자바스크립트를 onya레이아웃에 맞도록 일부 수정한 것입니다.
// 수정 및 배포를 허락해주신 우야노님께 진심으로 감사드립니다.

// Hide And Show Toggle
var cc=0
function hideShow(id) {
    if (cc==0) {
        cc=1
        document.getElementById(id).style.display="none";
    } else {
        cc=0
        document.getElementById(id).style.display="block";
    }
}

// Show And Hide Toggle
var cc=0
function showHide(id) {
    if (cc==0) {
        cc=1
        document.getElementById(id).style.display="block";
    } else {
        cc=0
        document.getElementById(id).style.display="none";
    }
}

// Local Navigation Toggle
function lnbToggle(id) {
	for(num=1; num<=3; num++) document.getElementById('D3MG'+num).style.display='none'; //D4MG1~D4MG3 까지 숨긴 다음
	document.getElementById(id).style.display='block'; //해당 ID만 보임
}

// IS
function chkIsKind(key, value) {
    showHide('selectOrder');
    xGetElementById('search_target'+key).checked = true;
    xInnerHtml('search_target_label', value);
}

// 롤오버 2차메뉴 만들기
// Brower
var browserType=''; 

if(navigator.userAgent.indexOf("MSIE") >-1) {
   browserType = 'IE'; 
} else if(navigator.userAgent.indexOf("Firefox") >-1) {
   browserType = 'FF'; 
} else {
   browserType = 'OTHER'; 
}

function gnbinToggle(id, gnbblock) {
	if(browserType == 'FF') {
		gnbinToggleFF(id, gnbblock);
	} else if (browserType == 'OTHER' )	{
		gnbinToggleFF(id, gnbblock);
	} else {
		gnbinToggleIE(id, gnbblock);
	}
}

// Local Navigation Toggle
function gnbinToggleIE(id, gnbblock) {

	for(num=0; num<gnb_count; num++) {
		document.getElementById('gnb'+num).style.display='none';              // 2차 메뉴
		document.getElementById('gnbli'+num).setAttribute('className', 'off');  // 1차 메뉴
	}

	var sub_1 = document.getElementById('gnbli'+id);     // 1 차메뉴 
	var sub_2 = document.getElementById('gnb'+id);     // 2 차메뉴
	var bodyWrap = document.getElementById('bodyWrap');  // 컨텐츠 가로폭
	document.getElementById('gnb'+id).style.display = 'block';
	gnbblock.className = "on";

	var sub_2_left =sub_1.offsetLeft - 2;

	// 2차메뉴 크기에 따른 위치 조절
	if (sub_2_left < 0)
		sub_2_left = 0;
	else if( (sub_2_left + sub_2.offsetWidth) > bodyWrap.offsetWidth )
		sub_2_left=(bodyWrap.offsetWidth - sub_2.offsetWidth);
		sub_2.style.marginLeft = sub_2_left + 'px';     
}

// Local Navigation Toggle
function gnbinToggleFF(id, gnbblock) {

	for(var num=0; num<gnb_count; num++) {
		document.getElementById('gnb'+num).style.display='none';	// 2차 메뉴
		document.getElementById('gnbli'+num).setAttribute('className', 'off');		// 1차 메뉴
	}

	var sub_1 = document.getElementById('gnbli'+id);     // 1 차메뉴 
	var sub_2 = document.getElementById('gnb'+id);     // 2 차메뉴
	var bodyWrap = document.getElementById('bodyWrap');  // 컨텐츠 가로폭
	document.getElementById('gnb'+id).style.display = '';
	gnbblock.className = "on";

	var sub_2_left =sub_1.offsetLeft -2 ;

	// 2차메뉴 크기에 따른 위치 조절
	if (sub_2_left < 0)
		sub_2_left = 0;
	else if( (sub_2_left + sub_2.offsetWidth) > bodyWrap.offsetWidth )
		sub_2_left=(bodyWrap.offsetWidth - sub_2.offsetWidth);
		sub_2.style.marginLeft = sub_2_left + 'px';     
}

function reset_menu()
{
   
     var sub_1 = document.getElementById('gnbli'+gnb_count_now);     // 1 차메뉴 
	 var sub_2 = document.getElementById('gnb'+gnb_count_now);     // 2 차메뉴
	 var bodyWrap = document.getElementById('bodyWrap');  // 컨텐츠 가로폭
     var sub_2_left =sub_1.offsetLeft-2;

	// 넓이가 0미만일경우 0
	if (sub_2_left < 0)
		sub_2_left = 0;
	else if( (sub_2_left + sub_2.offsetWidth) > bodyWrap.offsetWidth )
		sub_2_left=(bodyWrap.offsetWidth - sub_2.offsetWidth);
		sub_2.style.marginLeft = sub_2_left + 'px';     
}

