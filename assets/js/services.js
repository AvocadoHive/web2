$(document).ready(function(){

    $('.d-discovery-motion').slick({
        adaptiveHeight:true,
        autoplay:true,
        autoplaySpeed: 2000,
        centerMode:true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });

    $(window).on('load scroll', function(){

        console.log($(window).scrollTop());

        // phone notif 1
        var elementone = $('.d-expiry-creds-inner .d-exp-creds-left');
        if( $(window).scrollTop() > 300 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }
        
        // phone notif 1
        var elementone = $('.d-expiry-creds-inner .d-exp-creds-right');
        if( $(window).scrollTop() > 300 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

        // phone notif 1
        var elementone = $('.d-discover-cars');
        if( $(window).scrollTop() > 950 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

        // phone notif 1
        var elementone = $('.d-prelit-cars');
        if( $(window).scrollTop() > 1680 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

    })
    
});