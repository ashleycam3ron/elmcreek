<?php
/*
Template Name: Contact Us
*/

get_header(); ?>

<div id="contact" class="container wrapper">
	<div id="banner" class="row"><?php the_post_thumbnail('full'); ?></div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article <?php post_class(array('entry','col-xs-10','col-xs-offset-1','col-md-5')) ?> id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>
	<?php endif; ?>
	<aside class="col-xs-10 col-md-6 message">
		<h2>Send us a message</h2>
		<?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
	</aside>
</div>
<?php get_footer(); ?>