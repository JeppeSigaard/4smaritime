$(function(){
    var win = $(window);
    
    if(win.height() < 500 && win.width() < 768){

        var h = win.height(),
            iH = $('.preheader .inner').innerHeight(),
            mH = $('.site-header').innerHeight(),
            calcHeight = h - mH,
            calcPadding = (h - mH - iH) / 2;
        
        if(calcHeight < iH){calcHeight = iH;}
        if(calcPadding < 20){calcPadding = 20;}
        
        $('.preheader').css({
            height: calcHeight,
            paddingTop: calcPadding,
        });
    }
    
    $(window).resize(function(){
        if(win.width() > 768){
            $('.preheader').removeAttr('style');
        }
    });
});