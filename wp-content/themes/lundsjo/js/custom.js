$(window).on("load", function(){
		var w = window.innerWidth;
			if (w > 600 && $('body').attr('class') != 'single') {

var timeoutID;

  timeoutID = window.setTimeout(slowAlert, 1000);

  function slowAlert() {

	$('.side-menu ul').slideDown();

}
}


})


$(document).ready(function(){

			$('.menu-toggle').click(function(){
				console.log(this);
			$('.main-menu').slideToggle();
		});

	var hide = 0;

var landingTop = $('.parallax-window').scrollTop();

var landingBot = landingTop + $('.parallax-window').height();

	var top = $(window).scrollTop()

	var toggle = 0;

	var w = window.innerWidth;
	var h = window.innerHeight;
	console.log(w)

	var nav = $('.side');
		$('body').append(nav)


	if (w <= 600) {

		$('.tillbaka').click(function(){

			$('.hidden-menu').slideToggle();

		});



		var nav = $('.side');



		$('body').append(nav)





		$('.side').css({

		width: '100%',

		position: 'fixed',

		top: '0'

	})

		$('.side-wrap-bottom').css({

			display:'block',

			width: '100%',

		});



		$('.side-wrap-top').css({

			display:'block',

			padding: '10px',

			width:'30%',

			'float':'left',

		});



		$('nav.side-menu').css({

			marginTop:'0',

		});



		$('.main-menu li').css({

			'float':'left'

		});



		$('.logo h2').css({

			fontSize: '4vw',

		})



		$('.logo h4').css({

			fontSize: '2vw',

		})



		$('ul.main-menu li a').css({

			fontSize: '12px',

		})







	 }else{


$('.tillbaka')
	.mouseenter(function(){
		$('.hidden-menu').slideDown();
		console.log();

	})

$('.side-wrap-bottom').mouseleave(function(){
	$('.hidden-menu').slideUp();
});


$('.hidden-menu').mouseover(function(){
	$('.hidden-menu').slideDown();
});

	 	console.log($('.parallax-window').length)

		if (landingBot / 2 < top && $('.parallax-window').length > 0) {

			$('.side ul.main-menu li a').css({
			color: 'rgb(113, 113, 113)',
		});


		console.log('meny bakgrund bort');

		$('.side').css({
			'backgroundColor': 'rgba(187, 187, 187, 0.0)'
		});

		$('.side ul.main-menu li a')
			.mouseover(function(){
				$(this).css({
					color: 'black'
				});
			})
			.mouseleave(function(){
				$(this).css({
					color: 'rgb(113, 113, 113)'
				});
			});

	} else if (landingBot / 2 > top && $('.parallax-window').length > 0){
		$('.side').css({
			'backgroundColor': 'rgba(187, 187, 187, 0.5)'
		});


		$('.hidden-menu li').css({
			color: '#383838',
		});

		$('.side ul.main-menu li a').css({
			color: '#383838',
		});

		$('.side ul.main-menu li a')
			.mouseover(function(){
				$(this).css({
					color: 'white'
				});
			})
			.mouseleave(function(){
				$(this).css({
					color: 'black'
				});
			});

	}
	 }



	 $(window).scroll(function(){


	 })





$(window).scroll(function(){



console.log(w);

var landingTop = $('.parallax-window').scrollTop();

var landingBot = landingTop + $('.parallax-window').height();



	var top = $(window).scrollTop()

	var bottom = top + $(document).height()

	var viewport = $(window).scrollTop()

	var area = $('.referens-section').height();

	var refsec = $('.referens-section');

	var referens = refsec.offset();

	var boxar = $('.kund-box');



	var windowH = $(window).height();

	var windowBottomPosition = (windowH + top)



	var scrollSpeed = 50;


	console.log(top)
	console.log(landingBot);




	 for (var i = boxar.length - 1; i >= 0; i--) {

	 		var element = $(boxar[i]);



	 		var epos = element.offset();



	 		var h = $(element).height();



	 		var b = epos.top + h;





console.log(b);



console.log(top);





	 		if (b  >= top && epos.top <= windowBottomPosition) {







	 			console.log(top);

	 			console.log(h);

	 			console.log(epos.top)

	 			console.log('inarea');



	 			console.log($(boxar[i]));

	 			var title = $(boxar[i].childNodes[3]);



	 			console.log($(title).offset().top);



				//$(title).animate({bottom: top - $(title).offset().top - windowH / scrollSpeed +'%'})

				$(title).css({'transform' : 'translateY('+ (top - $(title).offset().top ) /20 +'px)'})



	 		};





	 	};

console.log(w);

	if (w > 600) {




	if (landingBot / 2 < top) {

		$('.side ul.main-menu li a').css({
			color: 'rgb(113, 113, 113)',
		});


		$('.trigger-cat').css({
			color: 'rgb(113, 113, 113)',
		});

		console.log('meny bakgrund bort');

		$('.side').css({
			'backgroundColor': 'rgba(187, 187, 187, 0.0)'
		});

		$('.side ul.main-menu li a')
			.mouseover(function(){
				$(this).css({
					color: 'black'
				});
			})
			.mouseleave(function(){
				$(this).css({
					color: 'rgb(113, 113, 113)'
				});
			});

		$('.hidden-menu li')

			.mouseover(function(){
				$(this).css({
					color: 'black'
				});
			})
			.mouseleave(function(){
				$(this).css({
					color: 'rgb(113, 113, 113)'
				});
			});

	} else{


		$('.hidden-menu li').css({color: 'black',});
			$('.hidden-menu li').mouseover(function(){
				$(this).css({
					color: 'white'
				});
			})
			$('.hidden-menu li').mouseleave(function(){
				$(this).css({
					color: 'black'
				});
			});


		$('.side').css({
			'backgroundColor': 'rgba(187, 187, 187, 0.5)'
		});

		$('ul.main-menu li a').css({
			color: '#383838',
		});

		$('.side ul.main-menu li a')
			.mouseover(function(){
				$(this).css({
					color: 'white'
				});
			})
			.mouseleave(function(){
				$(this).css({
					color: 'black'
				});
			});


	}







	//console.log(top);

	if (top <= 100) {

		//console.log('top')

		$('.side').css({

		//width: '17%',

		position: 'fixed',

	})

		$('.side-wrap-bottom').css({

			display:'block',

			//width:'100%',

		})

		$('.side-wrap-top').css({

			display:'block',

			//width:'100%',

		})



		$('nav.side-menu').css({

		display:'block',

	})



			$('.logo ').css({

		//'padding-left':'20px',

	})



			/*

		$('.logo').empty();

		$('.logo').prepend('<a href="http://aartslundsjo.mediahelpcrm.se/design3/index.html"><h2>AARTS<span style="display:block;">LUNDSJÖ</span></h2><h4>SPECIALSNICKERI<sup>AB</sup></h4></a>')

*/



	}else if(top > 100 ) {



	$('.logo ').css({

		//'padding-left':'0',

	})



		if (toggle != 1 ) {



		$('.side').css({

			position: 'fixed',

		})



		$('.side-wrap-top').css({


			//padding: '10px 0px',

		})





	$('nav.side-menu').css({



		//display:'none',

	})



};

/*

	$('.logo').empty();

	$('.logo').prepend('<a id="meny-toggle"><i class="fa fa-bars"></i></a>')

*/

	}



	$('.main-menu a').click(function(){



		$('.side').css({

			top:'0px'

		})

	})



	$('#meny-toggle').click(function(){



		console.log(w);



		if (w > 600) {



		if (toggle == 1) {



			hide = 1;



			$('.side-wrap-bottom').css({

			//width: '50px',

			})

			$('nav.side-menu').css({

				display:'none',

			})

			$('.side-wrap-top').css({

			//width: '50px',

			})

			toggle = 0;

		}else{





		console.log('click');

		$('.side').css({

			//width:'17%',

		})

		$('.side-wrap-bottom').css({

			display: 'block',

			height: '100%',

			//width: '100%',

			position: 'absolute',

			left: '0px',

			backgroundColor: 'rgba(144, 144, 144, 0.5)',

		})

		$('nav.side-menu').css({

				display:'block',

			})

		$('.side-wrap-top').css({

//			width: '100%',

	});



		$('.side').css({

			backgroundColor:'rgba(144, 144, 144, 0)'

		})

		toggle++

}





}else{



}

	});





}else{



	$('#meny-toggle').click(function(){

		console.log('mobile');

	});





	/*



		if (top <= 2) {

		//console.log('top')

		$('.side').css({

		width: '100%',

		height:'125px',

		position: 'fixed',

		top: top

	})

		$('.side-wrap-bottom').css({

			display:'block'

		})



		$('.side-wrap-top').css({

			display:'block',

			width:'30%',

			float:'left',

		})



		$('nav.side-menu').css({

			marginTop:'0',

		})



		$('.main-menu li').css({

			float:'left'

		})



		$('.logo').empty();

		$('.logo').prepend('<a href="http://aartslundsjo.mediahelpcrm.se/design3/index.html"><h2>AARTS<span style="display:block;">LUNDSJÖ</span></h2><h4>SPECIALSNICKERI<sup>AB</sup></h4></a>')



	}else if(top > 0) {



		$('.side').css({

			width: '100%',

			height:'125px',

			position: 'fixed',

			top: top

		})



		$('.side-wrap-top').css({

			textAlign: 'center',

			padding: '10px 0px',

		})



		$('.side-wrap-bottom').css({

			display:'none'

		})

	}

*/

}



});



})
