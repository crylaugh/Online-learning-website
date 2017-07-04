<?php
/* Smarty version 3.1.30, created on 2017-06-10 16:47:56
  from "D:\phpStudy\WWW\mvc_smarty\tpl\front\homepage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593bb23c1f5794_50157777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64dd80f300cce4c48e0a086d6e81ba43b92b9dda' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\mvc_smarty\\tpl\\front\\homepage.html',
      1 => 1497060714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593bb23c1f5794_50157777 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人主页</title>
	<link rel="stylesheet" type="text/css" href="style/reset.css">
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<link rel="stylesheet" type="text/css" href="style/homepage.css">
</head>



<body>
	<header id="index_header">
		<h2><a href="index.php" title="">在线学习网</a></h2>
		<nav>
			<ul class="clearfix">
				<li><a href="index.php?controller=index&method=course_list" title="">课程</a></li>
				<li><a href="index.php?controller=index&method=article_list" title="">文章</a></li>
				<li><a href="" title=""></a></li>
			</ul>
		</nav>
		<div class="nav_right">
			<div class="inputout">
			<form action="index.php?controller=index&method=searchAll" method="post" accept-charset="utf-8">
				<input type="search" name="search" value="" placeholder="搜索全站">
				<span><input type="submit" name="" value=""></span>
			</form>
			</div>
			<span><a href="" title=""><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</a></span><a href="index.php?controller=index&method=logout" title="">退出</a>
		</div>
	</header><!-- /header -->
	<div class="home_main">
		<div class="user_header clearfix">
			<div class="user_img">
				<img src="img/qiu.jpg" alt="" width="120px" height="120px">
			</div>
			<h3><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</h3><span><img src="img/icon/man.png" alt=""></span>
			<p>你好，这是一句话。</p>
		</div>
		<div class="user_info clearfix">
			<div class="user_menu">
				<ul>
					<li><a href="index.php?controller=index&method=user_study&id=<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
" title="" target="iframepage"><span>学过的课程</span></a></li>
					<li><a href="index.php?controller=index&method=user_read&id=<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
" title="" target="iframepage"><span>看过的文章</a></span></li>
				</ul>
			</div>
			<div class="user_study">
				<iframe src="index.php?controller=index&method=user_study&id=<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
"  id="iframepage" frameBorder="0" scrolling=no  name="iframepage" 
				 width="100%" onLoad="iframeLoad()"></iframe>

				<?php echo '<script'; ?>
 type="text/javascript">
				function iframeLoad() {  
				    document.getElementById("iframepage").height=0;  
				    document.getElementById("iframepage").height=document.getElementById("iframepage").contentWindow.document.body.scrollHeight;  
					}   
				<?php echo '</script'; ?>
>
			</div>

		</div>
	</div>
	<footer>
		<div class="footer_main">
			<div class="footer_top">
 				<ul class="clearfix">
 					<li><a href="" title="">关于我们</a></li>
 					<li><a href="" title="">联系我们</a></li>
 					<li><a href="" title="">帮助中心</a></li>
 					<li><a href="" title="">内容招募</a></li>
 					<li><a href="" title="">意见反馈</a></li>
 				</ul>
			</div>
			<div class="footer_bottom">
				&copy 软件工程13-4 赵东雨
			</div>
		</div>
	</footer>
</body>
</html><?php }
}
