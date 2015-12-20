<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_post_thumbnail(); ?>
	<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<p><a href="<?php the_permalink(); ?>">Read more &#8594;</a></p>
	</div><!-- .entry-summary -->

	<?php if ( 'post' == get_post_type() ) : ?>

		<footer class="entry-footer">
			<?php edit_post_link( __( 'Edit', 'elmcreek' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->

	<?php else : ?>
		<?php edit_post_link( __( 'Edit', 'elmcreek' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
	<?php endif; ?>

</article><!-- #post-## -->
