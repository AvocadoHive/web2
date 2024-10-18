$( document ).ready(function() {
    console.log( "ready!" );

    $(window).on('load scroll', function(){

        console.log($(window).scrollTop());

        // phone notif 1
        var elementone = $('.d-expiry-creds-inner .d-exp-creds-left');
        if( $(window).scrollTop() > 400 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

        var elementone = $('.d-expiry-creds-inner .d-exp-creds-right');
        if( $(window).scrollTop() > 400 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

        var elementone = $('.d-main-prices-inner .d-pricing-item.d-pricing-left .d-price-container');
        if( $(window).scrollTop() > 900 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

        var elementone = $('.d-main-prices-inner .d-pricing-item.d-pricing-right .d-price-container');
        if( $(window).scrollTop() > 900 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

        var elementone = $('.d-pricing-learn-more a');
        if( $(window).scrollTop() > 2100 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

        var elementone = $('.d-credit-discount-inner h4');
        if( $(window).scrollTop() > 2390 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

        var elementone = $('.d-discount-image img');
        if( $(window).scrollTop() > 2700 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

    })
});