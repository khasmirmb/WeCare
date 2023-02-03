$(function(){
    $('.vote-list-content, .ranking-list-content, .polls-list, .today-top, .box, #login-show').click(function(){
        $('#login-modal').fadeIn().css('display', 'flex')
    });

    $('.close-modal').click(function(){
        $('#login-modal').fadeOut();
    });
});
 
 

