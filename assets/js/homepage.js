$( document ).ready(function() {
    console.log( "ready!" );

    $(window).on('load scroll', function(){

        // console.log($(window).scrollTop());
        // phone notif 1
        var elementone = $('.d-phone-db ul li.dphoneone span');
        if( $(window).scrollTop() > 900 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

        // phone notif 2
        var elementtwo = $('.d-phone-db ul li.dphonetwo span');
        if( $(window).scrollTop() > 1000 ){ elementtwo.addClass('show') }else{ elementtwo.removeClass('show') }

        // phone notif 3
        var elementthree = $('.d-phone-db ul li.dphonethree span');
        if( $(window).scrollTop() > 1200 ){ elementthree.addClass('show') }else{ elementthree.removeClass('show') }


        var girl_image = $('.d-handle-inner .d-handle-left');
        if( $(window).scrollTop() > 2100 ){ girl_image.addClass('show') }else{ girl_image.removeClass('show') }

        var girl_title = $('.d-handle-inner .d-handle-right h5');
        if( $(window).scrollTop() > 2000 ){ girl_title.addClass('show') }else{ girl_title.removeClass('show') }

        var girl_desc_one = $('.d-handle-inner .d-handle-right ul li.d-one');
        if( $(window).scrollTop() > 2200 ){ girl_desc_one.addClass('show') }else{ girl_desc_one.removeClass('show') }

        var girl_desc_two = $('.d-handle-inner .d-handle-right ul li.d-two');
        if( $(window).scrollTop() > 2300 ){ girl_desc_two.addClass('show') }else{ girl_desc_two.removeClass('show') }

        var girl_desc_three = $('.d-handle-inner .d-handle-right ul li.d-three');
        if( $(window).scrollTop() > 2400 ){ girl_desc_three.addClass('show') }else{ girl_desc_three.removeClass('show') }


        var how_to_get_started = $('.d-handle-started h5');
        if( $(window).scrollTop() > 4600 ){ how_to_get_started.addClass('show') }else{ how_to_get_started.removeClass('show') }

        var d_numbers_num_one = $('.d-numbers .number-one');
        if( $(window).scrollTop() > 4800 ){ d_numbers_num_one.addClass('show') }else{ d_numbers_num_one.removeClass('show') }

        var d_numbers_num_two = $('.d-numbers .number-two');
        if( $(window).scrollTop() > 4800 ){ d_numbers_num_two.addClass('show') }else{ d_numbers_num_two.removeClass('show') }

        var d_numbers_num_three = $('.d-numbers .number-three');
        if( $(window).scrollTop() > 4800 ){ d_numbers_num_three.addClass('show') }else{ d_numbers_num_three.removeClass('show') }


        var d_numbers_test_title = $('.d-handle-info .d-handle-base .d-handle-desc-intro');
        if( $(window).scrollTop() > 5100 ){ d_numbers_test_title.addClass('show') }else{ d_numbers_test_title.removeClass('show') }

        var d_numbers_test_desc = $('.d-handle-info .d-handle-base .d-handle-desc-desc');
        if( $(window).scrollTop() > 5100 ){ d_numbers_test_desc.addClass('show') }else{ d_numbers_test_desc.removeClass('show') }



    })
});