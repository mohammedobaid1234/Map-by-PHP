$(function(){
    'use strick';
    $('.whole').height($(window).height());
    $(window).resize(function () { 
        $('.whole').height($(window).height());
        $('.container').css({
            'top' : $(window).height/2
        })
        
    });
    
    // $('button').click(function () { 
    //     $('.res').css({
    //        // 'visibility' : 'visible'
    //        'border': '4px dashed rgb(223, 226, 11)'
    //     })
    // });
    $('input').click(function(){
        $('input').css({
            'border': 'none',
        })
    })
})
   
      

