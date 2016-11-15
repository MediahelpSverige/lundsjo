<?php
get_header();
?>

<div id="fullpage">
	<div  class="page-wrap section">
		<div class="side col-sm-3 col-lg-2 col-md-2">
			<div class="side-wrap">
				<div class="side-wrap-top">
					<div class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url');?>/img/logga.png"></a></div>
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

<div class="row">
<div class="col-md-2 col-lg-2"></div>
<div class="col-lg-10 col-md-10">
<div class="section-wrap">


<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); ?>

					<?php the_title('<h1>','</h1>');?>

					<?php the_content();?>

					<?php

					?>
<?php
				} // end while ?>


			<?php } ?>

			<div id="showcase-grid">


			<?php $books = get_post_meta( $post->ID, 'grid', true );
foreach( $books as $book){ ?>

	<div class="showcase-item">
		<a href="<?php the_permalink(); ?>">
			<img src="<?php echo wp_get_attachment_url($book['image']); ?>">
			<div class="title-bak"><h3 class="project-text">	<?php echo $book['text']; ?></h3></div>
		</a>
	</div>
<?php } ?>

</div>

	</div>
</div>
</div>
</div>
</div>


<?php get_footer(); ?>


<script>

$(document).ready(function(){

	console.log('test');

	var elem = document.querySelector('#showcase-grid');

		var msnry = new Masonry( elem, {

			  // options
			  itemSelector: '.showcase-item',
			  columnWidth: 200,
			  gutter: 10,
			  


			});

		elem.imagesLoaded().progress( function(){
			msnry.masonry('layout');
		})


	});


console.log('single');

</script>
