<?php
/**
 *
 * echo bloginfo('name');
 * echo get_bloginfo('ss');//默认值是 MioStudio
 * echo get_option('blogdescription');
 * update_option('blogname','MioStudio');//更新
 *
 * get_header();
 * get_footer();
*/

if(is_dynamic_sidebar()){
	dynamic_sidebar();
}else{
	//自定义侧边栏（如果后台没有，则前台显示）
}

//wp_list_cats();//获取分类列表
//wp_list_pages();//获取页面列表

//get_links();//友情链接
//wp_register();//管理站点

//wp_loginout();//登陆、退出