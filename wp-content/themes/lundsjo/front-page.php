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

	<div class="section">
<?php $the_query = new WP_Query( array( 'post_type' => 'slide', 'posts_per_page' => -1)); ?>

<?php $i = 0; ?>

<?php while($the_query->have_posts() ) : $the_query->the_post(); ?>




			<div class="slideshow-items hidden">

		<?php

		if ($i === 0) {



			$firstimage = the_post_thumbnail_url( 'full' );


				}

?>
			<img src="<?php the_post_thumbnail_url( 'full' ); ?>">

			</div>



<?php $i++ ?>

		<?php wp_reset_postdata(); ?>

		<?php endwhile;?>



		<?php $thumb = wp_get_attachment_url(get_post_thumbnail_id($the_query->posts[0]->ID));



		?>

<div class="parallax-window" data-iosFix="false" data-parallax="scroll" data-natural-height="1941" data-natural-width="3000" data-image-src="<?php echo $thumb; ?>">
			<a href="#Portfolio"><i class="fa fa-angle-down"></i></a>
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
			<?php wp_reset_postdata(); ?>
			<?php endwhile;?>
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

<h1>hello</h1>

<script type="text/javascript">
	    $(document).ready(function() {
        var url = window.location.href + "wp-content/themes/lundsjo";
        var w = window.innerWidth;
        $(function() {
            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
                    if (target.length) {
                        $("html, body").animate({
                            scrollTop: target.offset().top
                        }, 1e3);
                        return false
                    }
                }
            })
        });
        var current_slide = 0;
        var slides = $(".slideshow-items");
        var startingslide = $(slides[current_slide])[0];
        var startingSrc = $(startingslide).attr("src");

        $(".parallax-slider").attr("src", startingSrc);

        var image = $(".parallax-slider").attr("src");

        $('.parallax-slider').imagesLoaded( function() {

        	//setTimeout(,4000);
        	//Display the grid after 3 seconds
        	setTimeout(function(){ sayHi(current_slide, slides, startingslide, startingSrc); }, 3000);

        	
        });


        



        if (w < 900 && w > 600) {

        	var msnry = new Masonry( '.portfolio-grid', {
  				// options
  				         itemSelector: ".project-item",
                    columnWidth: 200,
                    fitWidth: true


			});
        } else {

            var msnry = new Masonry( '.portfolio-grid', {
    
                    // options
                    itemSelector: ".project-item",
                    fitWidth: true,
                    transitionDuration: "0.8s"
            })
        }
        $(window).resize(function() {
        	/*
        	console.log('resize');
            $grid.imagesLoaded().progress(function() {
                $grid.masonry("layout")
            })
            */
        });
        $(".toggle-child").click(function() {
            var sibling = $(this).next();
            $(sibling).slideToggle(function() {
                console.log("toggled")
            })
        });
        var toggle = 0;
        $("#showcase-slider").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplaySpeed: 300
        });
        $("li a").click(function(event) {
            //event.children('ul').slideToggle();
            var clicked = $(event.target).parent()
        });
        $(".menu-toggle").click(function() {
            $(".main-menu").slideToggle("slow")
        });
        var hide = 0;
        var landingTop = $(".parallax-window").scrollTop();
        var landingBot = landingTop + $(".parallax-window").height();
        var top = $(window).scrollTop();
        var toggle = 0;
        var w = window.innerWidth;
        var h = window.innerHeight;
        var nav = $(".side");
        $("body").append(nav);
        if (w <= 600) {
            $(".tillbaka").click(function() {});
            var nav = $(".side");
            $("body").append(nav);
            $(".side").css({
                width: "100%",
                position: "fixed",
                top: "0"
            });
            $(".side-wrap-bottom").css({
                display: "block",
                width: "100%"
            });
            $(".side-wrap-top").css({
                display: "block",
                padding: "10px",
                width: "30%",
                float: "left"
            });
            $("nav.side-menu").css({
                marginTop: "0"
            });
            $(".main-menu li").css({
                float: "left"
            });
            $(".logo h2").css({
                fontSize: "4vw"
            });
            $(".logo h4").css({
                fontSize: "2vw"
            });
            $("ul.main-menu li a").css({
                fontSize: "12px"
            })
        } else {
            $(".tillbaka").mouseenter(function() {
                $(".hidden-menu").slideDown()
            });
            $(".side-wrap-bottom").mouseleave(function() {});
            $(".hidden-menu").mouseover(function() {});
            if (landingBot / 2 < top && $(".parallax-window").length > 0) {
                $(".side ul.main-menu li a").css({
                    color: "rgb(113, 113, 113)"
                });
                $(".side").css({
                    backgroundColor: "rgba(187, 187, 187, 0.0)"
                });
                $(".side ul.main-menu li a").mouseover(function() {
                    $(this).css({
                        color: "black"
                    })
                }).mouseleave(function() {
                    $(this).css({
                        color: "rgb(113, 113, 113)"
                    })
                })
            } else if (landingBot / 2 > top && $(".parallax-window").length > 0) {
                $(".side").css({
                    backgroundColor: "rgba(187, 187, 187, 0.5)"
                });
                $(".hidden-menu li").css({
                    color: "#383838"
                });
                $(".side ul.main-menu li a").css({
                    color: "#383838"
                });
                $(".side ul.main-menu li a").mouseover(function() {
                    $(this).css({
                        color: "white"
                    })
                }).mouseleave(function() {
                    $(this).css({
                        color: "black"
                    })
                })
            }
        }
        $(window).scroll(function() {
            var landingTop = $(".parallax-window").scrollTop();
            var landingBot = landingTop + $(".parallax-window").height();
            var top = $(window).scrollTop();
            var bottom = top + $(document).height();
            var viewport = $(window).scrollTop();
            var area = $(".referens-section").height();
            var refsec = $(".referens-section");
            var referens = refsec.offset();
            var boxar = $(".kund-box");
            var windowH = $(window).height();
            var windowBottomPosition = windowH + top;
            var scrollSpeed = 50;
            for (var i = boxar.length - 1; i >= 0; i--) {
                var element = $(boxar[i]);
                var epos = element.offset();
                var h = $(element).height();
                var b = epos.top + h;
                if (b >= top && epos.top <= windowBottomPosition) {
                    var title = $(boxar[i].childNodes[3]);
                    //$(title).animate({bottom: top - $(title).offset().top - windowH / scrollSpeed +'%'})
                    $(title).css({
                        transform: "translateY(" + (top - $(title).offset().top) / 20 + "px)"
                    })
                }
            }
            if (w > 600) {
                if (landingBot / 2 < top) {
                    $(".side ul.main-menu li a").css({
                        color: "rgb(113, 113, 113)"
                    });
                    $(".trigger-cat").css({
                        color: "rgb(113, 113, 113)"
                    });
                    $(".side").css({
                        backgroundColor: "rgba(187, 187, 187, 0.0)"
                    });
                    $(".side ul.main-menu li a").mouseover(function() {
                        $(this).css({
                            color: "black"
                        })
                    }).mouseleave(function() {
                        $(this).css({
                            color: "rgb(113, 113, 113)"
                        })
                    });
                    $(".hidden-menu li").mouseover(function() {
                        $(this).css({
                            color: "black"
                        })
                    }).mouseleave(function() {
                        $(this).css({
                            color: "rgb(113, 113, 113)"
                        })
                    })
                } else {
                    $(".hidden-menu li").css({
                        color: "black"
                    });
                    $(".hidden-menu li").mouseover(function() {
                        $(this).css({
                            color: "white"
                        })
                    });
                    $(".hidden-menu li").mouseleave(function() {
                        $(this).css({
                            color: "black"
                        })
                    });
                    $(".side").css({
                        backgroundColor: "rgba(187, 187, 187, 0.5)"
                    });
                    $("ul.main-menu li a").css({
                        color: "#383838"
                    });
                    $(".side ul.main-menu li a").mouseover(function() {
                        $(this).css({
                            color: "white"
                        })
                    }).mouseleave(function() {
                        $(this).css({
                            color: "black"
                        })
                    })
                }
                if (top <= 100) {
                    //console.log('top')
                    $(".side").css({
                        //width: '17%',
                        position: "fixed"
                    });
                    $(".side-wrap-bottom").css({
                        display: "block"
                    });
                    $(".side-wrap-top").css({
                        display: "block"
                    });
                    $("nav.side-menu").css({
                        display: "block"
                    });
                    $(".logo ").css({})
                } else if (top > 100) {
                    $(".logo ").css({});
                    if (toggle != 1) {
                        $(".side").css({
                            position: "fixed"
                        });
                        $(".side-wrap-top").css({});
                        $("nav.side-menu").css({})
                    }
                }
                $(".main-menu a").click(function() {
                    $(".side").css({
                        top: "0px"
                    })
                });
                $("#meny-toggle").click(function() {
                    console.log(w);
                    if (w > 600) {
                        if (toggle == 1) {
                            hide = 1;
                            $(".side-wrap-bottom").css({});
                            $("nav.side-menu").css({
                                display: "none"
                            });
                            $(".side-wrap-top").css({});
                            toggle = 0
                        } else {
                            console.log("click");
                            $(".side").css({});
                            $(".side-wrap-bottom").css({
                                display: "block",
                                height: "100%",
                                //width: '100%',
                                position: "absolute",
                                left: "0px",
                                backgroundColor: "rgba(144, 144, 144, 0.5)"
                            });
                            $("nav.side-menu").css({
                                display: "block"
                            });
                            $(".side-wrap-top").css({});
                            $(".side").css({
                                backgroundColor: "rgba(144, 144, 144, 0)"
                            });
                            toggle++
                        }
                    } else {}
                })
            } else {
                $("#meny-toggle").click(function() {
                    console.log("mobile")
                })
            }
        })
    })

        function sayHi(current_slide, slides) {
            current_slide++;
            console.log(current_slide);
            if ($(slides).length <= current_slide) {
                current_slide = 0
            }
            console.log($(slides[current_slide])[0]);
            var slide = $(slides[current_slide])[0];
            console.log(slide.innerHTML);
            var src = $(slide.innerHTML).attr("src");
            console.log(src);
            // console.log(slides[current_slide]);
            image = $(".parallax-slider").attr("src");
            $(".parallax-slider").fadeOut(1e3, function() {
                $(".parallax-slider").attr("src", src)
            }).fadeIn(4000);
            //setTimeout(sayHi, 4000)
        }

</script>


<?php get_footer(); ?>
