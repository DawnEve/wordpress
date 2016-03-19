<!-- Column 2 / Sidebar -->
<div class="grid_4">

	<ul><li id="searchform">
		<?php include(TEMPLATEPATH . '/searchform.php'); ?>
	</li></ul>
        
    <?php if ( !function_exists('dynamic_sidebar') 
                        || !dynamic_sidebar('First_sidebar') ) : ?>
        <h4>分类目录</h4>
        <ul>
            <?php wp_list_categories('depth=1&title_li=&orderby=id&show_count=0&hide_empty=1&child_of=0'); ?>
        </ul>
    <?php endif; ?>
        
		
		
		
		<ul>
			<?php wp_list_pages('title_li=<h4>页面目录</h4>'); ?>
		</ul>
		
		
		
    <?php if ( !function_exists('dynamic_sidebar') 
                            || !dynamic_sidebar('Second_sidebar') ) : ?>        
        <h4>最新文章</h4>
        <ul>
            <?php
                $posts = get_posts('numberposts=6&orderby=post_date');
                foreach($posts as $post) {
                    setup_postdata($post);
                    echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                }
                $post = $posts[0];
            ?>
        </ul>
    <?php endif; ?>
    
	
	
	
    <?php if ( !function_exists('dynamic_sidebar') 
                            || !dynamic_sidebar('Third_sidebar') ) : ?> 
        <h4>标签云</h4>
        <p><?php wp_tag_cloud('smallest=8&largest=22'); ?></p>
    <?php endif; ?>
        
		
		
		
		
    <?php if ( !function_exists('dynamic_sidebar') 
                        || !dynamic_sidebar('Fourth_sidebar') ) : ?>                    
        <h4>文章存档</h4>
        <ul>
            <?php 
				//wp_get_archives('limit=10'); 
				wp_get_archives('type=monthly'); 
			?>
        </ul>
    <?php endif; ?>
    
	
	<h4>友情链接</h4>
	<?php get_links_list();//?为什么没有显示呢？ ?>
	<ul>
		<li><a target='_blank' href='http://blog.dawneve.cc'>dawn's blog</a></li>
		<li><a target='_blank' href='#'>xx</a></li>
	</ul>
	
	
	
	
</div>
    <div class="hr grid_12 clearfix">&nbsp;</div>
	
<!-- Column 2 / Sidebar 
	<div class="grid_4">
		<h4>Catagories</h4>
		<ul class="sidebar">
			<li><a href="">So who are we?</a></li>
			<li><a href="">Philosophy</a></li>
			<li><a href="">History</a></li>
			<li><a href="">Jobs</a></li>
			<li><a href="">Staff</a></li>
			<li><a href="">Clients</a></li>
		</ul>
		<h4>Archives</h4>
		<ul class="sidebar">
			<li><a href="">January 2010</a></li>
			<li><a href="">December 2009</a></li>
			<li><a href="">Novemeber 2009</a></li>
			<li><a href="">October 2009</a></li>
			<li><a href="">September 2009</a></li>
			<li><a href="">August 2009</a></li>
		</ul>
	</div>
	<div class="hr grid_12 clearfix">&nbsp;</div>
-->