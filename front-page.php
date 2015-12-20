<?php get_header();?>
	<div id="home" class="container-fluid">
		<div class="container entry">
			<div class="row">
			<?php while(have_posts()) : the_post();?>
				<div class="col-md-2 left text-center">
					<div id="weather">
						<?php date_default_timezone_set('America/Chicago');
			              $today = date("l, F d g:ia T"); ?>
			            <p><?php echo $today; ?></p>
			            <?php //echo do_shortcode("[wunderground location='zmw:68836.1.99999' layout='current' numdays='1' hidedata='search,icon']"); ?>
			             <?php echo do_shortcode("[wunderground location='zmw:68836.1.99999' layout='simple' numdays='1' showdata='highlow' hidedata='search,icon']"); ?>
			        </div>

					<?php
						$date = strtotime("August 25, 2016 10:00 AM");
						$remaining = $date - time();
						$days_remaining = floor($remaining / 86400);
						$hours_remaining = floor(($remaining % 86400) / 3600);

					?>
					<h3 class="ticket"><span>Days 'til Buffalo Stampede</span> <br /><?php echo $days_remaining; ?></h3>
					<div class="public">
						<h4>Public Announcement</h4>
						<p>Please allow extra time for travel when roads are icy.</p>
					</div>

				</div>
				<div class="col-md-10 history">
					<h2 class="text-center">History</h2>
					<div class="entry">
						<div class="col-md-4 first"><?php the_field('col1'); ?></div>
						<div class="col-md-4"><?php the_field('col2'); ?></div>
						<div class="col-md-4"><?php the_field('col3'); ?></div>
					</div>
				</div>
			<?php endwhile;?>
			</div>
		</div>
		<div class="row quick">
			<?php wp_nav_menu( array('menu' => 'quick-links','menu_class' => 'nav')); ?>
		</div>
		<div id="news" class="row">
			<div id="cal" class="col-md-4">
				<?php dynamic_sidebar('calendar'); ?>
			</div>
			<div class="col-md-8">
				<?php dynamic_sidebar('events-widgets'); ?>
			</div>

		</div>
	</div>
<?php get_footer();?>