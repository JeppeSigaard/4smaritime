$(function(){

	if($('.preheader').length > 0){

		$(window).on({
			scroll: function(){

				if($(window).scrollTop() > $('.preheader').innerHeight()){
					$('body').addClass('fixed');
				}

				else{
					$('body').removeClass('fixed');
				}
			},

		});
	}
	else{
		$('body').addClass('fixed');
	}
});
