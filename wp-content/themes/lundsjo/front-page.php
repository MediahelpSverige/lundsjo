<?php
get_header();
?>

<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					//
					// Post Content here
					//
				} // end while
			} // end if


?>
<div id="reactElement"></div>
<div id="fullpage">
	<div  class="page-wrap">

	<div class="landing_section">
		<div class="grid_canvas">




<div class="parallax-window" data-iosFix="true" androidFix="true" data-parallax="scroll" data-natural-height="1941" data-natural-width="3000" data-image-src="<?php the_post_thumbnail_url('full'); ?>">
			<a href="#Portfolio"><i class="fa fa-angle-down"></i></a>
		</div>
	</div>
		<div class="side col-sm-3 col-lg-2 col-md-2">
			<div class="side-wrap">
				<div class="side-wrap-top">
					<div class="logo"><a data-menuanchor="Hem" href="#Hem"><img src="<?php bloginfo('template_url');?>/img/logga.png"></a></div>
				</div>
				<?php //wp_nav_menu(array( 'menu' => 'main_nav', 'menu_class'))?>
				<div class="side-wrap-bottom">
				<div class="menu-toggle"><i class="fa fa-bars"></i></div>
				<?php wp_nav_menu( array( 'menu' => 'sidmenu', 'menu_class' => 'main-menu', 'container' => 'nav', 'container_class' => 'side-menu')); ?>
		</div>
	</div>
</div>
</div>
</div>


<div id="Om" class="hur-section section fp-auto-height fp-section">
<div class="row">
	<div class="col-sm-3 col-md-2 col-lg-2"></div>
	<div class="col-md-9 col-lg-9 col-sm-8 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
		<div class="section-wrap">
		<?php the_field('hur_vi_arbetar'); ?>

		</div>

		<div class="section-wrap">
		<?php the_field('om_oss'); ?>

		</div>

		<div class="section-wrap" id="Kontakt">
		<?php the_field('kontakt'); ?>

		</div>
	</div>
</div>
</div>


<?php get_footer(); ?>
