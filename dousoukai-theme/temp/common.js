//PAGE TOP
$(function() {
    var topBtn = $('#page-top');    
    topBtn.hide();
    //スクロールが500に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            topBtn.fadeIn(300, "swing");
        } else {
            topBtn.fadeOut(300, "swing");
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

