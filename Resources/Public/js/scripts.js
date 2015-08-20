$('.navigation').affix({
    offset: {
      top: $('header').height()-$('.navigation').height()
    }
})
;

/*
$('footer').affix({
    offset: {
      top: $('header').height() + 100
    }
})
;
*/

$('.scroll-top').each(function(){
    $(this).click(function(){
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });
});
