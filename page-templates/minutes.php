<?php
/*
Template Name: Minutes
*/
?>
<?php get_header(); ?>

<div id="minutes" class="container">
	<?php while(have_posts()) : the_post();?>
			<article <?php post_class(array('entry','col-xs-10','col-xs-offset-1','col-md-6','col-md-offset-3')) ?> id="post-<?php the_ID(); ?>">
				<h1><?php the_title(); ?></h1>
				<ul>
				  <?php if( have_rows('minutes') ): ?>
				  <?php while( have_rows('minutes') ): the_row(); ?>
					<li>
						<h3><?php the_sub_field('year'); ?><span class="caret"></span></h3>
						<?php if( have_rows('minutes1') ): ?>
						<div class="minutes">
						  <?php while( have_rows('minutes1') ): the_row(); ?>
							<h4><a href="<?php the_sub_field('file'); ?>"><?php the_sub_field('title'); ?></a></h4>
						  <?php endwhile; ?>
						</div>
						<?php endif; ?>
					</li>
				  <?php endwhile; ?>
				  <?php endif; ?>
				</ul>
			</article>
	<?php endwhile; ?>
</div>

<script type="text/javascript">
    jQuery(document).ready(function() {
	    jQuery(".minutes").css('display','none');
        jQuery("h3").click(function() {
	        jQuery(this).toggleClass('active');
	        jQuery(this).nextUntil('h3').slideToggle('slow');
	    });
    });
</script>

<?php get_footer();?>