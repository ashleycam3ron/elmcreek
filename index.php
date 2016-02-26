<?php get_header();?>
	<div class="container wrapper">
		<?php while(have_posts()) : the_post();?>

		<?php if ( has_post_thumbnail() ) { ?>
		<div id="banner" class="row"><?php the_post_thumbnail('full'); ?></div>
		<?php } ?>

			<article class="entry col-md-10 col-md-offset-1">
<!--
				<div class="connect">
                    <span>Connect</span>
                    <?php wp_nav_menu( array('menu' => 'Social')); ?>
                </div>
-->
				<h1><?php the_title();?></h1>
				<?php the_content();?>
			</article>

		<?php endwhile;?>
	</div>
<?php get_footer();?>