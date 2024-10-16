$(document).ready(function(){
    $('.d-cofounder-item .d-founder-image').click(function(){
       $(this).closest('.d-cofounder-item').find('.d-founder-desc').addClass('open_desc');
    });

    $('.d-close-mods').click(function(){
        $(this).closest('.d-founder-desc').removeClass('open_desc');

        console.log('this is a test');
     });

    
    
});