
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>
<hr class="border border-gray-600" />
<footer id="colophon" class="site-footer p-8 container mx-auto flex justify-between" role="contentinfo">

<div class="text-center text-gray-500">
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
	</div>

<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden mt-4 p-5 lg:mt-0 lg:p-0 lg:bg-transparent lg:block text-white',
						'menu_class'      => 'lg:flex lg:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4',
						'fallback_cb'     => false,
					)
				);
				?>

	<?php do_action( 'tailpress_footer' ); ?>


</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
