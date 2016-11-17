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
<div id="fullpage">
	<div  class="page-wrap">

	<div class="landing_section">
		<div class="grid_canvas">


<?php $the_query = new WP_Query( array( 'post_type' => 'slide', 'posts_per_page' => -1)); ?>




		<?php $thumb = wp_get_attachment_url(get_post_thumbnail_id($the_query->posts[0]->ID));



		?>

<div class="parallax-window" data-iosFix="false" data-parallax="scroll" data-natural-height="1941" data-natural-width="3000" data-image-src="<?php echo $thumb; ?>">
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
				<?php wp_nav_menu( array( 'menu' => 'sidmenu', 'menu_class' => 'main-menu', 'container' => 'nav', 'container_class' => 'side-menu', 'walker' => new My_Walker_Nav_Menu()) ); ?>
		</div>
	</div>
</div>
</div>
</div>
<div id="Portfolio" class="section fp-auto-height">
<div class="portfolio-wrap">
	<!--<h1>VÅRA <span class="portfolio-title">PROJEKT</span></h1>-->

	<div class="portfolio-grid">

			<div class="project-item">
				<a href="<?php //the_permalink(); ?>">
					<?php// the_post_thumbnail('large'); ?>
					<div class="title-bak"><h3 class="project-text"><?php //the_title(); ?></h3></div>
				</a>
			</div>
			<?php// wp_reset_postdata(); ?>
			<?php// endwhile;?>
	</div>
</div>

<div id="Om" class="hur-section section fp-auto-height">
<div class="row">
	<div class="col-md-2 col-lg-2"></div>
	<div class="col-md-9 col-lg-10">
		<div class="section-wrap">
		<?php the_field('hur_vi_arbetar'); ?>

		</div>
	</div>
	<div class="col-md-2 col-lg-1"></div>
	</div>
</div>

<div id="" class="om-section">
<div class="row">
	<div class="col-md-2 col-lg-2"></div>
	<div class="col-md-9 col-lg-10">
		<div class="section-wrap">
		<?php the_field('om_oss'); ?>

		</div>
		</div>

	<div class="col-md-2 col-lg-1"></div>
	</div>
</div>

<div id="Kontakt" class="Kontakt-section section">
<div class="row">
	<div class="col-md-2 col-lg-2"></div>
	<div class="col-md-9 col-lg-10">
		<div class="section-wrap">
		<?php the_field('kontakt'); ?>

		</div>
	</div>
	<div class="col-md-2 col-lg-1"></div>
	</div>
</div>


</div>

<script type="text/javascript">

</script>


<?php get_footer(); ?>
