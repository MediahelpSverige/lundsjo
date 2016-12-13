
(function($) {

	/*

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




	*/

	$(document).on( 'click', '.trigger-cat a', function( event ) {
	event.preventDefault();
	var text = $(this).html().toLowerCase();

	console.log(text);

	

	
	$.ajax({
		url: ajaxpagination.ajaxurl,
		type: 'post',
		data: {
			action: 'ajax_pagination',
			query_vars: ajaxpagination.query_vars,
			page: text
		},
		beforeSend: function() {

			$('.portfolio-wrap').find('.portfolio-grid').empty();


		},
		success: function( html ) {

			var new_div = $(html).hide();

			$('.portfolio-wrap').find('.portfolio-grid').append(new_div);

			$('.portfolio-grid').show();

			$('.project-item').fadeIn('slow', function(){
				


			});

			/*

			var $grid = $('.portfolio-grid').imagesLoaded( function() {
$grid.masonry({
        // options
        itemSelector: '.project-item',
        columnWidth: 5,
        fitWidth: false,
        });
});
*/


		},

		complete: function(){

			var masonry = $('.portfolio-grid').data('masonry');

			masonry.reloadItems();

			masonry.layout();



							        $(window).resize(function() {


                $grid.masonry();
        });



			console.log('grid completed')



		}
	})
})


})(jQuery);



