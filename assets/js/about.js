$(document).ready(function(){
      $('.d-cofounder-item .d-founder-image').click(function(){
         $(this).closest('.d-cofounder-item').find('.d-founder-desc').addClass('open_desc');
      });

      $('.d-close-mods').click(function(){
         $(this).closest('.d-founder-desc').removeClass('open_desc');

         console.log('this is a test');
      });

      $(window).on('load scroll', function(){

         console.log($(window).scrollTop());
 
         // phone notif 1
         var elementone = $('.d-code-value-items .d-core-item.d-one-base');
         if( $(window).scrollTop() > 700 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

         var elementone = $('.d-code-value-items .d-core-item.d-two-base');
         if( $(window).scrollTop() > 700 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

         var elementone = $('.d-code-value-items .d-core-item.d-three-base');
         if( $(window).scrollTop() > 700 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

         var elementone = $('.d-mission-base-inner .d-mission-title');
         if( $(window).scrollTop() > 1620 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

         var elementone = $('.d-mission-base-inner .d-mission-desc');
         if( $(window).scrollTop() > 1700 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

         var elementone = $('.d-operational-inner h4');
         if( $(window).scrollTop() > 2570 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

         var elementone = $('.d-cofounder-item.d-ceo-base');
         if( $(window).scrollTop() > 2800 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

         var elementone = $('.d-cofounder-item.d-coo-base');
         if( $(window).scrollTop() > 2800 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

         var elementone = $('.d-cofounder-item.d-cto-base');
         if( $(window).scrollTop() > 2800 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }

         var elementone = $('.d-cofounder-item.d-cfo-base');
         if( $(window).scrollTop() > 2800 ){ elementone.addClass('show') }else{ elementone.removeClass('show') }
         
 
     })

    
    
});