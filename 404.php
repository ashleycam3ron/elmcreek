<?php get_header(); ?>

<div id="error-404" class="container-fluid">
	<article>
        <div class="entry row">
	        <h1 class="hidden">Page not found</h1>
		</div>
	</article>
</div>

<? if (is_404()) { ?>
<script>
 _gaq.push(['_trackEvent', '404',
  document.location.pathname + document.location.search,
  document.referrer, 0, true]);
</script>
<? } ?>
<?php get_footer(); ?>
