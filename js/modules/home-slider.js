var home_slider = $('.home-slider'),
    home_slider_target = '.widescreen-hero';


if(home_slider.length && $(home_slider_target).length > 1){
    home_slider.flickity({
        setGallerySize: false,
        cellSelector: home_slider_target,
        wrapAround: true,
        prevNextButtons: false,
        pageDots: false,
    });
}