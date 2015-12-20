<?php get_header(); ?>
	<section id="search" class="container">

		<?php if ( have_posts() ) : ?>
			<h2><?php printf( __( 'Search Results for: %s', 'minnowproject' ), get_search_query() ); ?></h2>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'search' );
					endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'minnowproject' ),
				'next_text'          => __( 'Next page', 'minnowproject' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'minnowproject' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else : ?>
			<section class="no-results not-found">
				<h2><?php _e( 'Nothing Found', 'minnowproject' ); ?></h2>
				<div class="page-content">
					<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
						<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'minnowproject' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
			
					<?php elseif ( is_search() ) : ?>
			
						<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'minnowproject' ); ?></p>
						<?php get_search_form(); ?>
			
					<?php else : ?>
			
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'minnowproject' ); ?></p>
						<?php get_search_form(); ?>
			
					<?php endif; ?>
			
				</div><!-- .page-content -->
			</section><!-- .no-results -->


		<?php endif; ?>
	</section>

<?php get_footer(); ?>
