<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lundovitw
 */

?>

<header id="masthead" class=" md:flex-col md:justify-between">
	<div id="secondary-nav" class="bg-[#161616] w-screen md:p-3 md:flex md:justify-center">
		<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class' => 'md:flex md:space-x-5',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
			?>
	</div>
	<div class="md:flex md:justify-between md:p-5">
		<div>
		<?php
		if ( is_front_page() ) :
			?>
			<h1 class="text-[#00CDDE] text-lg"><?php bloginfo( 'name' ); ?></h1>
			<?php
		else :
			?>
			<p class="text-[#00CDDE] text-lg"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;

		$lundovitw_description = get_bloginfo( 'description', 'display' );
		if ( $lundovitw_description || is_customize_preview() ) :
			?>
			<p><?php echo $lundovitw_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	</div>


	<nav class="" id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'lundovitw' ); ?>">
		<button class="md:hidden" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lundovitw' ); ?></button>
		<div class>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class' => 'md:flex md:space-x-5 md:font-semibold',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
			?>
		</div>
	
				
	</nav><!-- #site-navigation -->
	</div>
	

</header><!-- #masthead -->
