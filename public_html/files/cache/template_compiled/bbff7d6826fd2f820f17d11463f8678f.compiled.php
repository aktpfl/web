<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/kin/tpl','_header.html') ?>
<?php echo $__Context->addition_content ?>
<script type="text/javascript">
	jQuery(function($){
		$('div.body form').each(function(index,elem){
			if(index==1 || index == 4 || index == 5){
				elem.style.display = 'none';
			}
			if(index==0){
				$(this).find('div.table table tr:last-child').prev().andSelf().hide();
				var comment_count = '<?php echo $__Context->lang->comment_count_kin ?>';
				var about_comment_count = '<?php echo $__Context->lang->about_comment_count_kin ?>';
				$(this).find('div.table table tr').first().find('th').text(comment_count);
				$(this).find('div.table table tr').first().find('td p').text(about_comment_count);
			}
		})
		if($('form#fo_point>div.table>table').find('tr').length){
			$('form#fo_point>div.table>table').find('tr').each(function(i, e){
				if(i!=1) $(this).hide();
				if(i==1){
					$(this).find('th').width('17%');
					var point_insert_comment = '<?php echo $__Context->lang->point_insert_comment_kin ?>';
					$(this).find('th').text(point_insert_comment);
					$(this).attr('class','');
				}
			});
		}
		$('form#fo_point div.btnArea span:last-child').hide();
	});
</script>