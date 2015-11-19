hamburger = {
    elem : $('.hamburger'),
    init : function(){
        hamburger.elem.on('click',function(e){
            e.preventDefault();
            $('body').toggleClass('show-menu'); 
        });
    },
};
$(function(){
    hamburger.init();
    
});