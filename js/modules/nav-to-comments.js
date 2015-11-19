$(function(){
    
    commentsInit = function(){
        
        var commentsBtn = $('.comment-link');
        commentsBtn.off().on({
            click : function(e){
                 e.preventDefault();
                
                var t = $(e.target),
                    previewParent = t.parents('.featured-article');
                
                    if(previewParent.length){
                        
                        var url = previewParent.children('a.post-header').attr('href') + '#comments'; 
                        window.location.href = url;
                    }
                else{
                    $('html,body').scrollTop(0).animate({scrollTop : $('#comments').offset().top},1200);
                }
            }
        
        });   
    }
    
    if(window.location.hash === '#comments'){
        $('html,body').scrollTop(0).animate({scrollTop : $('#comments').offset().top},1200);
    }

    commentsInit();
});