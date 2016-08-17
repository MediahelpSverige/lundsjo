<?php
get_header();
?>


  <div class="single-page-wrap">
        <div class="side-single">
            <div class="container">
                <div class="side-wrap">
                    <div class="side-wrap-top">
                        <div class="logo">
                            <a href="http://aartslundsjo.mediahelpcrm.se/design3v3/index.html"><img id="single" src="<?php bloginfo('template_url'); ?>/img/logga.png"></a>
                        </div>
                    </div>
                    <div class="side-wrap-bottom single">
                        <nav class="side-menu">
                            <div class="tillbaka"><i class="fa fa-bars"></i></div>
                            <ul class="hidden-menu">
                                <li><a href="<?php bloginfo('url');?>/#Portfolio">Åter till Portfolio</a></li>
                                <li><a href="<?php bloginfo('url');?>/referens">Referenser</a></li>
                                <li><a href="<?php bloginfo('url');?>/#Hur">Hur vi arbetar</a></li>
                                <li><a href="<?php bloginfo('url');?>/#Om">Om oss</a></li>
                                <li><a href="<?php bloginfo('url');?>/#kontakt">Kontakt</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container content">
        <div class="singel-content-wrap">
        <h1>test</h1>
        <?php the_content(); ?>
        <?php print_r($post); ?>
        <?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();

					the_content(); ?> 


            <div class="col-lg-4">
                <div class="single-side-wrap">
                    <div class="single-wrap-bottom">
                        <h3 class="cust-title">Kund: <span>Summit</span></h3>
                        <h3>Arkitekt/Designer: <span>Koncept</span></h3>
                        <h3>Uppdragsgivare: <span>Summit Hitech</span></h3>
                        <div class="project-desc">
                            <h3>Uppdrag:</h3>
                            <p>Vi har levererat receptionsdisk, barbord och lounge del. Inredningen är tillverkad spännande material kombinationer av mdf med spegellaminat belyst kanalplast och stoppade soffor.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">

            <?php the_post_thumbnail(); ?>

            </div>

            			<?php 	} // end while ?>
        </div>

        <?php wp_reset_postdata();?>

        	<?php		} // end if

?>
    </div>
    <footer>
        <div class="footer-cont">
            <h5>Mail: <a href="mailto:info@aartslundsjo.se">info@aartslundsjo.se</a></h5> </div>
    </footer>
    <script>
        $(document).ready(function() {
            $(".single .menu-toggle").click(function() {
                console.log(this), $(".hidden-menu").slideToggle()
            }), $("#showcase-slider").owlCarousel({
                items: 1,
                loop: !0,
                autoplay: !0,
                autoplaySpeed: 300
            }), $("li a").click(function(e) {
                console.log($(e.target).parent());
                var l = $(e.target).parent();
                $(l).children(".child-menu").slideToggle()
            }), $("#imageGallery").lightSlider({
                gallery: !0,
                item: 1,
                loop: !0,
                slideMargin: 10,
                thumbItem: 9,
                vertical: !1,
                enableDrag: !1,
                prevHtml: '<i class="fa fa-angle-left"></i>',
                nextHtml: '<i class="fa fa-angle-right"></i>',
                currentPagerPosition: "left",
                responsive: [{
                    breakpoint: 600,
                    settings: {
                        item: 1,
                        vertical: !1,
                        gallery: !1,
                        thumbItem: 9,
                        slideMargin: 0
                    }
                }],
                onSliderLoad: function(e) {
                    e.lightGallery({
                        selector: "#imageGallery .lslide"
                    });
                    for (var l = $(".lSPager li"), a = l.length - 1; a >= 0; a--) console.log($(l[a]).attr("class")), $(l[a]).css({
                        "margi-top": "10px"
                    }), "active" != $(l[a]).attr("class") && $(l[a]).append('<div class="overlay-bak"></div>')
                },
                onAfterSlide: function(e) {
                    for (var l = $(".lSPager li"), a = l.length - 1; a >= 0; a--) console.log($(l[a]).attr("class")), "" == $(l[a]).attr("class") ? $(l[a]).append('<div class="overlay-bak"></div>').fadeIn(2e3) : $(".active .overlay-bak").fadeOut(800)
                }
            })
        })
    </script>

<?php get_footer(); ?>