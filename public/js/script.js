//お知らせアコーディオン
$(function(){
    $('.accttl').click(function(){
        $(this).toggleClass("active");
    });
    $('.close-bg').click(function(){
        $(this).prev().prev('.accttl').toggleClass("active");
    });
});


//モーダルウィンドウ
$(function(){
    $('.js-modal-open').each(function(){
        $(this).on('click',function(){
            var target = $(this).data('target');
            var modal = document.getElementById(target);
            $(modal).fadeIn();
            $(this).parents('.js-modal').fadeOut();
            return false;
        });
    });
    $('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        return false;
    });
});


//タブ切替
$(function(){
  $("#js-tab li").click(function(){
    $("#js-tab li").removeClass("active");
    $(this).addClass("active");
    var index = $(this).index();
    
    $(".tab-content").removeClass("active");
    $(".tab-content").eq(index).addClass("active");
  });
});

