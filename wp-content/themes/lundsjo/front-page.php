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
<?php $the_query = new WP_Query( array( 'post_type' => 'slide', 'posts_per_page' => -1)); ?>

<?php while($the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="slideshow-items hidden">

			<img src="<?php the_post_thumbnail_url( 'full' ); ?>">

			</div>


		<?php wp_reset_postdata(); ?>

		<?php endwhile;?>

		<div class="parallax-window" data-iosFix="false" data-parallax="scroll" data-natural-height="1941" data-natural-width="3000" data-image-src="<?php bloginfo('template_url')?>/img/banner6.jpg">
			<a href="#Portfolio"><i class="fa fa-angle-down"></i></a>
		</div>
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
</div>
<div id="" class="section">
<div class="portfolio-wrap">
	<h1>VÅRA <span class="portfolio-title">PROJEKT</span></h1>

	<?php $the_query = new WP_Query( array( 'post_type' => 'showcase', 'posts_per_page' => -1)); ?>

	<div class="portfolio-grid">

	<?php while($the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="project-item">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('large'); ?>
					<div class="title-bak"><h3 class="project-text"><?php the_title(); ?></h3></div>
				</a>
			</div>
			<?php endwhile;?>
	</div>
</div>

<div id="" class="hur-section section">
	<div class="col-md-2 col-lg-1"></div>
	<div class="col-md-9 col-lg-10">
		<div class="section-wrap">
			<h1>Hur vi arbetar</h1>
			<h3>Arkitekter</h3>
			<p>Vi lyssnar, kommenterar och vidareutvecklar med en prestigelös inställning. Vi är unga och intresserade av ny form och idéer. Vi gillar svåra utmaningar och räds inte att prova nya vägar tillsammans med er.
				Samarbetar du med oss från ett tidigt stadium så blir slutresultatet ännu bättre och vägen dit både effektivare och roligare.
				Vi samarbetar både med specialister på andra material såsom sten, olika form av metaller stål, rostfritt, mässing, plast och glas samt med tapetserare och sadelmakare.
				Vi vill vara bäst.
				Vi vill leverera de finaste och svåraste arkitektritade inredningarna.
				Vi vill ständigt utvecklas och bli bättre så vi välkomnar kluriga utmaningar.
				I tid. Vi levererar alltid i tid och tackar därför hellre nej än lovar saker som vi inte kan hålla.
			Pris. Att hitta kostnadseffektiva arbetssätt och ekonomiska lösningar ser vi också som en del i den kreativa processen. </p>
			<h3>Privat och företag</h3>
			<p>Vi tillverkar allt ifrån kompletta inredningar till privata och offentliga miljöer till möbler och inredningsdetaljer.
				Det kan vara allt ifrån ett komplett kök, en receptionsmiljö, till en platsbyggd garderob eller hylla för privat bruk.
				Om ni önskar så kan vi rekommendera några arkitektbyråer som vi jobbar mycket med.
				Vi står för detaljarbetet om du ger oss dina enkla skisser.
				Tillsammans med er kan vi skissa fram ett eller flera förslag utifrån dina önskemål och ekonomi. Vi gör uppmätningar, tekniska ritningar, tillverkar inredningen eller möblerna som vi sedan monterar hos er.
			Vi samarbetar med specialister inom andra material så som sten, rostfritt, glas, tapetserare och sadelmakare.</p>
			<h3>Miljöpolicy</h3>
			<p>Träslag, laminat, oljor, färg, lack och rengöringsmedel. Oavsett vad det gäller så väljer vi alltid det mest miljövänliga alternativet eller leverantören.
			Detta är en inställning som vi ser som självklar och vi räknar med att våra kunder sympatiserar med detta och accepterar de kompromisser som krävs för miljöns skull.</p>
		</div>
	</div>
	<div class="col-md-2 col-lg-1"></div>
</div>

<div id="" class="om-section section">
	<div class="col-md-2 col-lg-1"></div>
	<div class="col-md-9 col-lg-10">
		<div class="section-wrap">
			<h1>Om oss</h1>
			<p>Vi tillverkar allt ifrån kompletta inredningar i privata och offentliga miljöer till enstycksmöbler och inredningsdetaljer. Det kan vara konceptbutiker, kontors- och receptionsmiljöer, platsbyggda kök, förvaringslösningar eller en enskild möbel för privat bruk. Prototyper och utställningsscenografier gör vi också gärna.
				Vi är unga och vill vara med att utveckla och förädla era idéer. Vi förstår oss på form och design samtidigt som vi har ett genuint teknikintresse. Vi älskar utmaningen med produktutveckling och är stolta över vår moderna maskinpark.
			Kostnadsmedvetna är vi också.</p>
		</div>
	</div>
	<div class="col-md-2 col-lg-1"></div>
</div>

<div id="" class="Kontakt-section section">
	<div class="col-md-2 col-lg-1"></div>
	<div class="col-md-9 col-lg-10">
		<div class="section-wrap">
			<h1>Kontakt</h1>
			<div class="project-desc">
				<h3>Adress:</h3>
				<p>Bolinders Strand
					Birger Dahlérus väg 3
				176 69 Järfälla</p>
			</div>
			<div class="project-desc">
				<h3>Växel:</h3>
				<h3>Mail:</h3>
				<p>+46 8 285880 info@aartslundsjo.se</p>
			</div>
			<div class="project-desc">
				<h3>Uppdrag:</h3>
				<p>Vi har levererat receptionsdisk, barbord och lounge del.
				Inredningen är tillverkad spännande material kombinationer av mdf med spegellaminat belyst kanalplast och stoppade soffor.</p>
			</div>
			<div class="project-desc">
				<h3>Uppdrag:</h3>
				<p>Vi har levererat receptionsdisk, barbord och lounge del.
				Inredningen är tillverkad spännande material kombinationer av mdf med spegellaminat belyst kanalplast och stoppade soffor.</p>
			</div>
		</div>
	</div>
	<div class="col-md-2 col-lg-1"></div>
</div>


</div>


<?php get_footer(); ?>

