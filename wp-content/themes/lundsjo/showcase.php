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
	<div  class="page-wrap section">
		<div class="parallax-window" data-iosFix="false" data-parallax="scroll" data-natural-height="1941" data-natural-width="3000" data-image-src="<?php bloginfo('template_url')?>/img/banner6.jpg">
			<a href="#Portfolio"><i class="fa fa-angle-down"></i></a>
		</div>
		<div class="side col-sm-3 col-lg-2 col-md-2">
			<div class="side-wrap">
				<div class="side-wrap-top">
					<div class="logo"><a href="http://aartslundsjo.mediahelpcrm.se/design3v3/index.html"><img src="<?php bloginfo('template_url');?>/img/logga.png"></a></div>
				</div>
				<?php //wp_nav_menu(array( 'menu' => 'main_nav', 'menu_class'))?>
				<div class="side-wrap-bottom">
					<nav class="side-menu">
						<div class="menu-toggle"><i class="fa fa-bars"></i></div>
						<ul class="main-menu">
							<li class="portfolio" data-menuanchor="Portfolio"><a class="toggle-child" href="#Portfolio">Portfolio</a>
							<ul class="hidden-menu">
								<li class="trigger-cat">Allt</li>
								<li class="trigger-cat">Butiksinredningar</li>
								<li class="trigger-cat">Inredningar</li>
								<li class="trigger-cat">Möbler</li>
								<li class="trigger-cat">Utställningar</li>
							</ul>
						</li>
						<li><a class="" href="/design3v3/referens.html">Referenser</a>
					</li>
					<li data-menuanchor=""><a href="#Hur">Hur vi arbetar</a></li>
					<li data-menuanchor=""><a href="#Om">Om oss</a></li>
					<li data-menuanchor=""><a href="#Kontakt">kontakt</a></li>
				</ul>
				
			</nav>
		</div>
	</div>
</div>
</div>

</div>

<?php get_footer(); ?>