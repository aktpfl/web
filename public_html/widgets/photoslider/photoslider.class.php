<?php
    /**
     * @class photoslider
     * @author orangetree 
     * @brief slider widget to display image
     * @version 0.1
     **/

    class photoslider extends WidgetHandler {

        /**
         * @brief Widget handler
         *
         * Get extra_vars declared in ./widgets/widget/conf/info.xml as arguments
         * After generating the result, do not print but return it.
         **/

        function proc($args) {
            // Targets to sort
            if(!in_array($args->order_target, array('list_order','update_order'))) $args->order_target = 'list_order';

            $args->wide_count = (int)$args->wide_count;
            if(!$args->wide_count) $args->wide_count = 4;

			//browser width <= 1199
			$args->count_1199 = (int)$args->count_1199;
            if(!$args->count_1199) $args->count_1199 = 3;
			
			//browser width <= 979
			$args->count_979 = (int)$args->count_979;
            if(!$args->count_979) $args->count_979 = 3;
			
			//browser width <= 768
			$args->count_768 = (int)$args->count_768;
            if(!$args->count_768) $args->count_768 = 2;

			//browser width <= 979
			$args->count_479 = (int)$args->count_479;
            if(!$args->count_479) $args->count_479 = 1;
			
			if(!in_array($args->singleitem, array('false','true'))) $args->singleitem = 'false';
			$widget_info->singleitem = $args->singleitem;

	
			$args->slidespeed = (int)$args->slidespeed;
            if(!$args->slidespeed) $args->slidespeed = 200;
			
			if(!in_array($args->lazy_load, array('false','true'))) $args->lazy_load = 'true';
			$widget_info->lazy_load = $args->lazy_load;


            // The number of displayed lists
            $args->slide_count = (int)$args->slide_count;
            if(!$args->slide_count) $args->slide_count = 10;

            // How to create thumbnails
            if(!$args->thumbnail_type) $args->thumbnail_type = 'ratio';
			if(!$args->imageborder) $args->imageborder = '#fff';

			$oModuleModel = &getModel('module');
            $module_srls = $args->modules_info = $args->module_srls_info = $args->mid_lists = array();
            $site_module_info = Context::get('site_module_info');

                // Apply to all modules in the site if a target module is not specified
			if(!$args->module_srls){
				unset($obj);
				$obj->site_srl = (int)$site_module_info->site_srl;
				$output = executeQueryArray('widgets.photoslider.getMids', $obj);
				if($output->data) {
					foreach($output->data as $key => $val) {
						$args->modules_info[$val->mid] = $val;
						$args->module_srls_info[$val->module_srl] = $val;
						$args->mid_lists[$val->module_srl] = $val->mid;
						$module_srls[] = $val->module_srl;
					}
				}
			
				$args->modules_info = $oModuleModel->getMidList($obj);
			// Apply to the module only if a target module is specified
			} else {
				$obj->module_srls = $args->module_srls;
				$output = executeQueryArray('widgets.photoslider.getMids', $obj);
				if($output->data) {
					foreach($output->data as $key => $val) {
						$args->modules_info[$val->mid] = $val;
						$args->module_srls_info[$val->module_srl] = $val;
						$module_srls[] = $val->module_srl;
					}
					$idx = explode(',',$args->module_srls);
					for($i=0,$c=count($idx);$i<$c;$i++) {
						$srl = $idx[$i];
						if(!$args->module_srls_info[$srl]) continue;
						$args->mid_lists[$srl] = $args->module_srls_info[$srl]->mid;
					}
				}
			}
			// Exit if no module is found
			if(!count($args->modules_info)) return Context::get('msg_not_founded');
			$args->module_srl = implode(',',$module_srls);
			
			$content_items = $this->_getImageItems($args);       
            $output = $this->_compile($args,$content_items);
            return $output;
        }

        function _getImageItems($args) {
            $oDocumentModel = &getModel('document');

            $obj->module_srls = $obj->module_srl = $args->module_srl;
            $obj->direct_download = 'Y';
            $obj->isvalid = 'Y';
            // Get categories
            $output = executeQueryArray('widgets.photoslider.getCategories',$obj);
            if($output->toBool() && $output->data) {
                foreach($output->data as $key => $val) {
                    $category_lists[$val->module_srl][$val->category_srl] = $val;
                }
            }
            // Get a file list in each document on the module
            $obj->slide_count = $args->slide_count;
            $files_output = executeQueryArray("file.getOneFileInDocument", $obj);
            $files_count = count($files_output->data);
            if(!$files_count) return;

            $content_items = array();
			if($files_count > $obj->slide_count ) $files_count = $args->slide_count;

            for($i=0;$i<$files_count;$i++) $document_srl_list[] = $files_output->data[$i]->document_srl;

            $tmp_document_list = $oDocumentModel->getDocuments($document_srl_list);

            if(!count($tmp_document_list)) return;

            foreach($tmp_document_list as $oDocument){
                $attribute = $oDocument->getObjectVars();
                $browser_title = $args->module_srls_info[$attribute->module_srl]->browser_title;
                $domain = $args->module_srls_info[$attribute->module_srl]->domain;
                $category = $category_lists[$attribute->module_srl]->text;
                $url = sprintf("%s#%s",$oDocument->getPermanentUrl() ,$oDocument->getCommentCount());
                $thumbnail = $oDocument->getThumbnail(300, 200,'crop');/*$oDocument->getThumbnail(300) 원본 이미지의 비율을 유지할때는!!*/


                $content_item = new contentItem($browser_title);
                $content_item->adds($attribute);
                $content_item->setCategory($category);
                $content_item->setContent($content);
                $content_item->setLink($url);
                $content_item->setThumbnail($thumbnail);
//                $content_item->setExtraImages($extra_images);
                $content_item->setDomain($domain);
                $content_item->add('mid', $args->mid_lists[$attribute->module_srl]);
                $content_items[] = $content_item;
            }

            return $content_items;
        }


       /**
         * @brief function to receive contents from rss url
         * For Tistory blog in Korea, the original RSS url has location header without contents. Fixed to work as same as rss_reader widget.
         **/

        function _compile($args,$content_items){
            $oTemplate = &TemplateHandler::getInstance();
            // Set variables for widget
            $widget_info->modules_info = $args->modules_info;
            $widget_info->slide_count = $args->slide_count;
            $widget_info->thumbnail_type = $args->thumbnail_type;
			$widget_info->order_target = $args->order_target;
			$widget_info->wide_count = $args->wide_count;
			$widget_info->count_1199 = $args->count_1199;
			//browser width <= 979
			$widget_info->count_979 = $args->count_979;
			$widget_info->count_768 = $args->count_768;
			$widget_info->count_479 = $args->count_479;

			$widget_info->singleitem = $args->singleitem;
			$widget_info->slidespeed = $args->slidespeed;
			$widget_info->lazy_load = $args->lazy_load;
            $widget_info->imageborder = $args->imageborder;
            $widget_info->mid_lists = $args->mid_lists;

            $widget_info->content_items = $content_items;

            unset($args->modules_info);

            Context::set('colorset', $args->colorset);
            Context::set('widget_info', $widget_info);

            $tpl_path = sprintf('%sskins/%s', $this->widget_path, $args->skin);
            return $oTemplate->compile($tpl_path, "content");
        }
    }

    class contentItem extends Object {

        var $browser_title = null;
        var $has_first_thumbnail_idx = false;
        var $first_thumbnail_idx = null;
        var $contents_link = null;
        var $domain = null;

        function contentItem($browser_title=''){
            $this->browser_title = $browser_title;
        }
        function setContentsLink($link){
            $this->contents_link = $link;
        }
        function setFirstThumbnailIdx($first_thumbnail_idx){
            if(is_null($this->first_thumbnail) && $first_thumbnail_idx>-1) {
                $this->has_first_thumbnail_idx = true;
                $this->first_thumbnail_idx= $first_thumbnail_idx;
            }
        }
        function setDomain($domain) {
            static $default_domain = null;
            if(!$domain) {
                if(is_null($default_domain)) $default_domain = Context::getDefaultUrl();
                $domain = $default_domain;
            }
            $this->domain = $domain;
        }
        function setLink($url){
            $this->add('url',$url);
        }
        function setThumbnail($thumbnail){
            $this->add('thumbnail',$thumbnail);
        }
        function setContent($content){
            $this->add('content',$content);
        }
        function setCategory($category){
            $this->add('category',$category);
        }
        function getBrowserTitle(){
            return $this->browser_title;
        }
        function getDomain() {
            return $this->domain;
        }
        function getContentsLink(){
            return $this->contents_link;
        }

        function getFirstThumbnailIdx(){
            return $this->first_thumbnail_idx;
        }

        function getLink(){
            return $this->get('url');
        }
        function getModuleSrl(){
            return $this->get('module_srl');
        }
        function getTitle($cut_size = 0, $tail='...'){
            $title = strip_tags($this->get('title'));

            if($cut_size) $title = cut_str($title, $cut_size, $tail);

            $attrs = array();
            if($this->get('title_bold') == 'Y') $attrs[] = 'font-weight:bold';
            if($this->get('title_color') && $this->get('title_color') != 'N') $attrs[] = 'color:#'.$this->get('title_color');

            if(count($attrs)) $title = sprintf("<span style=\"%s\">%s</span>", implode(';', $attrs), htmlspecialchars($title));

            return $title;
        }
        function getContent(){
            return $this->get('content');
        }
        function getCategory(){
            return $this->get('category');
        }
        function getNickName(){
            return $this->get('nick_name');
        }
        function getAuthorSite(){
            return $this->get('author_site');
        }
        function getCommentCount(){
            $comment_count = $this->get('comment_count');
            return $comment_count>0 ? $comment_count : '';
        }
        function getTrackbackCount(){
            $trackback_count = $this->get('trackback_count');
            return $trackback_count>0 ? $trackback_count : '';
        }
        function getRegdate($format = 'Y.m.d H:i:s') {
            return zdate($this->get('regdate'), $format);
        }
        function printExtraImages() {
            return $this->get('extra_images');
        }
        function haveFirstThumbnail() {
            return $this->has_first_thumbnail_idx;
        }
        function getThumbnail(){
            return $this->get('thumbnail');
        }
        function getMemberSrl() {
            return $this->get('member_srl');
        }
    }
?>
