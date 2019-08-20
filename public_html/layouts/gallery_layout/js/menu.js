
jQuery(document).ready(function() {

	jQuery(".item").each(function(){
		jQuery(this).hover(function(){
			jQuery(this).addClass("item-hover");
			jQuery(".sub1Container", this).css("top","66px");
		}, function(){
			jQuery(this).removeClass("item-hover");
			jQuery(".sub1Container", this).css("top","-999px");
			//jQuery("<div style="position:absolute; top:100; left:0px; width:100%; height:200px;"></div>").appendTo(jQuery("body"));
		});
	});

	jQuery(".sub1Item").each(function(){
		jQuery(this).hover(function(){
			jQuery(this).addClass("sub1Item-hover");
		}, function(){
			jQuery(this).removeClass("sub1Item-hover");
		});
	});

	jQuery(".subMenu1").each(function(){
		jQuery(this).hover(function(){
			jQuery(this).addClass("subMenu1-hover");
		}, function(){
			jQuery(this).removeClass("subMenu1-hover");
		});
	});

});