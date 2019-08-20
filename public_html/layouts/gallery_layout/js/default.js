
var xPos = new Array();
var yPos = new Array();

var iWidth = 250;
var iHeight = 170;

var xMargin = 0;
var yMargin = 0;

var xStart = -75;
var xOffSet = 50;

var yStart = -140;
var yOffSet = 140;

var selimage = 0;
var openup = false;

for (i = 0; i <= 12; i++)
{
	if(i == 4){
		xPos[i] = xPos[0] - iWidth / 2;
	} else if(i == 5){
		xPos[i] = xStart - iWidth - xMargin * 2 - iWidth / 2;
	} else if(i == 6){
		xPos[i] = xPos[3] + iWidth + xMargin * 2 + iWidth / 2;
	} else if(i == 7){
		xPos[i] = xPos[3] + iWidth / 2;
	} else if(i > 7){
		xPos[i] = xPos[i-8];
	} else {
		xPos[i] = xStart + xOffSet * i;
	}

	if(i == 4){
		yPos[i] = yStart + yOffSet * parseInt(i/4) - 210 / 2;
	} else if(i == 5){
		yPos[i] = yStart + yOffSet * parseInt(i/4) + 210 / 2;
	} else if(i == 6){
		yPos[i] = yStart + yOffSet * parseInt(i/4) + 210 / 2;
	} else if(i == 7){
		yPos[i] = yStart + yOffSet * parseInt(i/4) - 210 / 2;
	} else {
		yPos[i] = yStart + yOffSet * parseInt(i/4);
	}
}

jQuery(document).ready(function(){
	
	jQuery("#wrapPage").click(function(){
		jQuery(".imageFrame").each(function(index, img){
			jQuery(img).css('z-index', '9');

			jQuery(img).animate({
				opacity: 1,
				top: "0" ,
				left: "0"
				}, 300
			);
		});

		jQuery("#frame").css("background-image", "url('')");
		
		openup = false;

	});


	jQuery(".imageFrame").click(function(){

		if(!openup){
		
			selimage = jQuery(this).attr("id");

			jQuery(".imageFrame").each(function(index, img){
				
				jQuery(img).css('z-index', '11');

				if(index != selimage){

					jQuery(img).animate({	
						opacity: 0.50,
						top: "+="+yPos[index] ,
						left: "+="+xPos[index] 
						}, 300
					);
				} else {

					jQuery(img).animate({	
						opacity: 0,
						top: "-="+ (parseInt(iHeight * parseInt(index/4)) + parseInt(yMargin * (parseInt(index/4) * 2)) - 200),
						left: "-="+ (parseInt(iWidth * parseInt(index%4)) + parseInt(xMargin * (parseInt(index%4) * 2)) - 400)
						}, 300 
					);
					jQuery("#frame").css("background-image", "url('" + jQuery('img', img).attr("src") + "')");
				}
			});
		} else {
		
			if(selimage == jQuery(this).attr("id")){
				jQuery("#wrapPage").click();
				openup = false;
				return openup;
			} else {

				jQuery("#wrapPage").click();
				jQuery("#" + jQuery(this).attr("id")).click();
			}
		}

		openup = true;
		return false;
	});

	jQuery(".imageFrame").hover(function(){
		info = jQuery('.info', this).css('opacity', 0).show();
		jQuery(this).append(info);
		info.animate({	
			opacity: 0.7,
			left: 0
			}, 200 
		);
	},function(){
		jQuery('.info', this).hide().css('opacity', 0).css('left', '-256px');
	});

});

function dj(inp){
	if(window && window.console && window.console.debug)
		window.console.debug(inp);
}