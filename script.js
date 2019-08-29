$(function () {
var topBtn = $('.page_top');
//スルスルっとスクロールでトップへもどる
topBtn.click(function () {
$('body,html').animate({
scrollTop: 0
}, 500);
return false;
});
});
