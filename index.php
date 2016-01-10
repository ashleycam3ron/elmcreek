<?php get_header();?>
	<div class="container">
		<?php while(have_posts()) : the_post();?>

			<article class="entry col-md-10 col-md-offset-1">
				<div class="connect">
                    <span>Connect</span>
                    <?php wp_nav_menu( array('menu' => 'Social')); ?>
                </div>
				<h1><?php the_title();?></h1>
				<?php the_content();?>

			</article>

		<?php endwhile;?>

		<?php //comment_form(); ?>
		<?php //comments_template( $file, $separate_comments ); ?>
	</div>
<?php get_footer();?>