$(document).ready(function(){
    
    $('.d-faq-title').click(function(){
        console.log('this is a test');

        let baseinline = $(this).closest('.d-faq-item-inner');

        if(baseinline.hasClass('active-faq')){
            baseinline.removeClass('active-faq').find('.d-faq-desc').hide('slow');
        } else {
            baseinline.addClass('active-faq').find('.d-faq-desc').show('slow');
        }



        $(this).closest('.d-faq-item-inner')
    });
    
});