	<footer id="footer" class="container-fluid text-center">
		<?php wp_nav_menu( array('menu' => 'main','depth' => 1,'menu_class' => 'nav')); ?>
		<address>535 West Boyd Avenue, Elm Creek, NE 68836</address>
		<p>Office <a tel="308-856-4624">(308) 856-4624</a>  <span>|</span>  Fax <a tel="308-856-4997">(308) 856-4997</a></p>
	    <p class="copyright">&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
	    <small><a href="http://ashley-cameron.com" style="color:#975f1c;" target="_blank">Handcrafted by Ashley Cameron</a></small>
	</footer>

  </body>
</html>
<?php wp_footer();?>