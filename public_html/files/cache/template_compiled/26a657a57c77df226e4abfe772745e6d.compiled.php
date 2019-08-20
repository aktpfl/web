<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/simblog2/css/basic.css--><?php $__tmp=array('layouts/simblog2/css/basic.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>creative</title>
</head>
<body>
	<div id="header">
    	<div id="navarea">
              <a href="<?php echo $__Context->layout_info->URL ?>"><?php if($__Context->layout_info->TEXTLOGO){;
if(!$__Context->layout_info->logo_image){ ?><h1><?php echo $__Context->layout_info->TEXTLOGO ?></h1><?php }} ?></a>
                <?php if($__Context->layout_info->sublogo){ ?><p><?php echo $__Context->layout_info->sublogo ?></p><?php } ?>
                <br />
                <ul>
                <?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key=>$__Context->val){ ?><li
                <?php if($__Context->val['selected']){ ?>	class="on"<?php } ?>>
                    <a href="<?php echo $__Context->val['href'] ?>"><?php echo $__Context->val['link'] ?></a>
                </li><?php } ?>
             </ul>
         </div>
    </div>
    <div id="conwarp">
        <div id="content">
            <?php echo $__Context->content ?>
        </div>
        <div id="asidemenu">
        	<h1>menu</h1><br />
				<?php if($__Context->layout_info->main_menu){ ?><ul>
                    <?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){ ?><li |cond="$__Context->val1['selected']" class="bborder">
                    <a href="<?php echo $__Context->val1['href'] ?>"><?php echo $__Context->val1['link'] ?></a>
                        <?php if($__Context->val1['list']){ ?>
                            <ul>
                                <?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="on"<?php } ?>>
                                    <a href="<?php echo $__Context->val2['href'] ?>">└<?php echo $__Context->val2['link'] ?></a>
                                </li><?php } ?>
                            </ul>
                        <?php } ?>
                    </li><?php } ?>
				</ul><?php } ?>
                <ul id="tool"><br />
                     <li><?php if(!$__Context->is_logged){ ?><a href="/?act=dispMemberLoginForm">로그인</a><?php } ?></li>
                     <li><?php if(!$__Context->is_logged){ ?><a href="/?act=dispMemberSignUpForm">회원가입</a><?php } ?></li>
                      <li><?php if($__Context->is_logged){ ?><a href="/?act=dispMemberLogout">로그아웃</a><?php } ?></li>
                     <li><?php if($__Context->is_logged){ ?><a href="/?act=dispMemberInfo">마이페이지</a><?php } ?></li>
                     <li><?php if($__Context->logged_info->is_admin){ ?><a href="/admin">관리자</a><?php } ?></li>
                </ul>
        </div>
          <div id="search">
                  	<h1>search</h1>
            <form action="<?php echo getUrl() ?>" method="get"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
                <input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
                <input type="hidden" name="act" value="IS" />
                <input name="is_keyword" type="text" class="sbar" size="12"  />
                <input class="sbtn" type="submit" value="검색" />
             </form> 
          </div>
        
    </div>
        <div id="footer">
	<?php if($__Context->layout_info->FOOTER){ ?><p><?php echo $__Context->layout_info->FOOTER ?></p><?php } ?>
        </div>
</body>
</html>
