// This function runs after Facebook is initiated //
var facebookInit = function(FB){
    
    var fbshare = $('.fb-share');
    fbshare.off().on({click: function(e){
        e.preventDefault();
        var t = $(e.target),
            previewParent = t.parents('.featured-article'),
            shareUrl;
        
        if (previewParent.length){shareUrl = previewParent.find('a.post-header').attr('href');}
        else{shareUrl = window.location.href;}
        
        
        
        FB.ui({
            method: 'share',
            href: shareUrl,
            display: 'iframe'
        });
    }});
    

}