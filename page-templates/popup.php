<?php
/*
Template Name: Popup
*/
?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php the_post(); ?>
<div class="entry" id="post-<?php the_ID(); ?>">
<h1 class="title"><?php the_title(); ?></h1>
<?php the_content(); ?>
</div>
