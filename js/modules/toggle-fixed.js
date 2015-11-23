var smamo_toggle_fixed = function(){
    
    if($(window).scrollTop() > $('.preheader').innerHeight()){
        $('body').addClass('fixed');
    }

    else if(!$('body').hasClass('home') && $(window).width() < 769){
        $('body').addClass('fixed');
    }

    else{
        $('body').removeClass('fixed');
    }
    
}

$(function(){

	if($('.preheader').length > 0){

        if(!$('body').hasClass('home') && $(window).width() < 769){
            $('body').addClass('fixed');
        }
        
		$(window).on({
			scroll: function(){smamo_toggle_fixed()},
            resize: function(){smamo_toggle_fixed()},
		});
	}
	else{
		$('body').addClass('fixed');
	}
});
