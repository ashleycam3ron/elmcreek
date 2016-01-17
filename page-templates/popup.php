<?php
/*
Template Name: Popup
*/
?>
<head>
    <link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<?php the_post(); ?>
<div class="entry text-center" id="post-<?php the_ID(); ?>">
	<?php if (is_page(142)){ ?>
		<img class="alert img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/emergency-alert.png" alt="emergency alert icon" />
	<?php } ?>
	<h1 class="title"><?php the_title(); ?></h1>
	<?php if (is_page(142)){ ?>
		<?php if (get_field('message')) { the_field('message');  } else {?>
			<p>There are currently no Emergency Alerts at this time.</p>
		<?php } ?>
	<?php } ?>
	<?php the_content(); ?>

</div>
