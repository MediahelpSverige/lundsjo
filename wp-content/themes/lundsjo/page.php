<?php
get_header();
?>

<div id="fullpage" class="showcase">
	<div  class="page-wrap section">
		<div class="side col-lg-2 col-md-2">
			<div class="side-wrap">
				<div class="side-wrap-top">
					<div class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url');?>/img/logga.png"></a></div>
				</div>
				<?php //wp_nav_menu(array( 'menu' => 'main_nav', 'menu_class'))?>
				<div class="side-wrap-bottom">
				<div class="menu-toggle"><i class="fa fa-bars"></i></div>
<?php wp_nav_menu( array( 'menu' => 'singlemenu', 'menu_class' => 'main-menu', 'container' => 'nav', 'container_class' => 'side-menu')); ?>
		</div>
	</div>
</div>

<div class="col-md-2 col-lg-2"></div>
<div class="col-md-9 col-lg-9 col-sm-8 col-md-offset-1 col-lg-offset-1">
<div class="section-wrap">


<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); ?>



					<?php the_content();?>

					<?php

					?>
<?php
				} // end while ?>


			<?php } ?>

	</div>
</div>
</div>
</div>


<?php get_footer(); ?>
