<style>
.box{border:1px solid red;width:800px; margin:10px auto;}
</style>

<?php

/**
 *
 * echo bloginfo('name');
 * echo get_bloginfo('ss');//默认值是 MioStudio
 * echo get_option('blogdescription');
 * update_option('blogname','MioStudio');//更新
 * 
get_header();
get_footer();
*/



//global $post;

if(have_posts()){
	//echo 'have';
	while( have_posts() ){
		the_post();//获取下一篇文章，并将信息存入全局变量$post中。
		//var_dump($post);
?>
		<div class=box>	
			<a href="<?php the_permalink();?>"><?php the_title();?></a>
			<?php the_content();?>
		</div>

<?php
	}

}else{
	echo 'no';
}

