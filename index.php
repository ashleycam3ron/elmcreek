<?php get_header();?>
	<div class="container">
		<?php while(have_posts()) : the_post();?>

			<div class="entry col-md-10 col-md-offset-1">
				<div class="connect">
                    <span>Connect</span>
                    <?php wp_nav_menu( array('menu' => 'Social')); ?>
                </div>
				<h2><?php the_title();?></h2>
				<?php the_content();?>

			</div>

		<?php endwhile;?>

		<?php //comment_form(); ?>
		<?php //comments_template( $file, $separate_comments ); ?>
	</div>
<?php get_footer();?>