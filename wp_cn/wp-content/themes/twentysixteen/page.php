<?php
/**
 * The template for displaying pages 这个模板用来展示页面。
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 * 这是默认页面模板。
 * 请注意这是wordpress为页面构建的，
 * 其他“页面”可能使用不同的模板。
 * 
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template. 包含页面内容模板。
			// 用法：php get_template_part( $slug, $name ); 
			// 实例：get_template_part( 'content', 'blog' ); //对应：content-blog.php
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			// 如果开放评论或至少有一条评论，就加载评论模板。
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

		// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
