<div class="clear"></div>
<footer id="footer">
	<?php wp_footer(); ?>
	<div id="footerwrap">	
		<div id="copyright">
		<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date('Y'), esc_html(get_bloginfo('name')) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://tidythemes.com/">TidyThemes</a>' ); ?>
		</div>
	</div>
	<div id="bottomfooter"></div>
</footer>
</div>
</body>
</html>