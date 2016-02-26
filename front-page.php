<?php get_header();?>
	<div id="home" class="container-fluid">
		<h1 class="hidden"><?php bloginfo('name')?> <?php bloginfo('description');?></h1>
		<div class="container entry">
			<div class="row">
			<?php while(have_posts()) : the_post();?>
				<div class="col-sm-4 col-md-2 left text-center hidden-xs">
					<div id="weather">
						<?php date_default_timezone_set('America/Chicago');
			              $today = date("l, F d g:ia T"); ?>
			            <p><?php echo $today; ?></p>
			             <?php echo do_shortcode("[wunderground location='zmw:68836.1.99999' layout='simple' numdays='1' showdata='highlow' hidedata='search,icon']"); ?>
			        </div>
					<?php
						$event = get_field('countdown');
						$date = strtotime($event);
						//$date = strtotime("August 25, 2016 10:00 AM");
						$remaining = $date - time();
						$days_remaining = floor($remaining / 86400);
						$hours_remaining = floor(($remaining % 86400) / 3600);
					?>
					<h3 class="ticket"><span>Days 'til Buffalo Stampede</span> <br /><?php echo $days_remaining; ?></h3>
					<div class="public">
						<div class="top"></div>
						<h4>Public Announcement</h4>
						<div class="text"><?php the_field('announcement'); ?></div>
						<div class="bottom"></div>
					</div>
				</div>
				<div class="col-sm-8 col-md-10 history">
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
	</div>
	<div class="container-fluid quick">
		<div class="row"><?php wp_nav_menu( array('menu' => 'quick-links','menu_class' => 'nav')); ?></div>
	</div>
	<div class="container-fluid" id="news">
		<div class="container">
			<div id="cal" class="col-sm-4">
				<?php dynamic_sidebar('calendar'); ?>
			</div>
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-0 col-md-7">
				<?php dynamic_sidebar('events-widgets'); ?>
			</div>
		</div>
	</div>

	<script>
		jQuery('.upcoming li').addClass('col-sm-4')
	</script>
<?php get_footer();?>