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

	<?php $the_query = new WP_Query( array( 'post_type' => 'showcase')); ?>

	<div class="portfolio-grid">

	<?php while($the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="project-item">
				<a href="/design3v3/single.html">
					<?php the_post_thumbnail('large'); ?>
					<h3 class="project-text"><?php the_title(); ?></h3>
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

<script type="text/javascript">
	$(document).ready(function() {
		var url = window.location.href + 'wp-content/themes/lundsjo';
		console.log(url)
					$('#fullpage').fullpage({
			anchors:['Hem', 'Portfolio', 'Hur', 'Om', 'Kontakt'],
			autoScrolling:false,
			fitToSection: false,
			resize : false,
			scrollingSpeed: 400,
			fixedElements: ".side",
			afterLoad: function(anchorLink, index){
var loadedSection = $(this);
var top = $(document).scrollTop()
	
//using anchorLink
if(anchorLink == 'secondSlide'){
alert("Section 2 ended loading");
}
}
		});
		var w = window.innerWidth;
	
sayHi();
var image = $('.parallax-slider').attr('src');

function sayHi() {
	image = $('.parallax-slider').attr('src');

	switch(image){
		case url +'/img/banner6.jpg':
			$(".parallax-slider").fadeOut(1000, function() {
			$('.parallax-slider').attr('src', url + '/img/banner3.jpg') ;
			}).fadeIn(800);
			break;
		case '/design3v3/img/banner5.jpg':
			$(".parallax-slider").fadeOut(1000, function() {
			$('.parallax-slider').attr('src', '/img/banner2.jpg') ;
			}).fadeIn(800);
			break;
		case '/design3v3/img/banner2.jpg':
			$(".parallax-slider").fadeOut(1000, function() {
			$('.parallax-slider').attr('src', '/img/banner3.jpg') ;
			}).fadeIn(800);
			break
		case '/design3v3/img/banner3.jpg':
			$(".parallax-slider").fadeOut(1000, function() {
			$('.parallax-slider').attr('src', '/img/banner5.jpg') ;
			}).fadeIn(900);
			break
		default:
			console.log('default');
			break
	}


	console.log($('.parallax-slider').attr('src'));

	setTimeout(sayHi,7000);

}



		$('.project-text').wrap('<div class="title-bak"></div>');
if( w < 900 && w > 600){
	console.log('ipad')
						var $grid = $('.portfolio-grid').imagesLoaded( function() {
$grid.masonry({
		// options
		itemSelector: '.project-item',
		columnWidth: 5,
		fitWidth: false,
		});
});
	}else{
		console.log('notipad')
		var $grid = $('.portfolio-grid').imagesLoaded( function() {
$grid.masonry({
		// options
		itemSelector: '.project-item',
		fitWidth: true,
		transitionDuration: '0.8s',
		});
	});
			}
		$( window ).resize(function() {
					$grid.imagesLoaded().progress( function() {
$grid.masonry('layout');
});
				});
		$('.toggle-child').click(function(){
			console.log('toggle')
			var sibling = $(this).next();
			console.log(sibling);
			$(sibling).slideToggle();
		});
		$('.trigger-cat').click(function(){
			$('.trigger-cat.active').removeClass('active');
			$(this).addClass('active');
			var allt = $('.project-item');
			
			var butik = $('.project-item.Butiksinredningar');
			var inredning = $('.project-item.Inredningar');
			var title = $(this).html();
			if (title == 'Allt') {
				//$('.portfolio-title').empty();
				//$grid.masonry( 'remove',  allt )
				$(allt).css({
					'display':none,
				});
				for (var i = allt.length - 1; i >= 0; i--) {
						console.log(allt);
						$grid.masonry( 'addItems',  allt )
					}
				//$('.portfolio-title').html('Projekt')
				$grid.on( 'removeComplete', function( event, removedItems ) {
			
					
				} )
			}else{
				//$('.portfolio-title').empty();
			//console.log($('.project-item.'+title) );
			
			//$('.portfolio-title').html(title);
			var items = $('.project-item');
			var remove = [];
			for (var i = items.length - 1; i >= 0; i--) {
				console.log(title);
				console.log(items[i]);
				console.log(items[i].className.indexOf(title));
				if (items[i].className.indexOf(title) > -1) {
			
			$grid.masonry( 'addItems',  items[i] )
				
			}else{
				$grid.masonry( 'remove',  items[i] )
					
			}
					$grid.masonry('layout');
				$grid.on( 'layoutComplete', onLayout );
			}
			console.log($(remove))
			var add =  $('.project-item.'+title)
				
			function onLayout() {
						$grid.masonry('reloadItems')
			}
			// bind event listener
			
			// un-bind event listener
			
			//$grid.masonry( 'prepended', add )
			console.log();
			}
		});
		var toggle = 0;
		$('#showcase-slider').owlCarousel({
		items:1,
		loop:true,
		autoplay: true,
		autoplaySpeed: 300
		})
		$('li a').click(function(event){
				//event.children('ul').slideToggle();
				console.log($(event.target).parent());
				var clicked = $(event.target).parent();
				$(clicked).children('.child-menu').slideToggle();
		});
	
	});
$(window).on("load", function(){
});
</script>

<?php get_footer(); ?>

