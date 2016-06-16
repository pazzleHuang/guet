$(function() {
        /*
            zoomWidth : 遮罩小图片宽度
            zoomHeight : 遮罩小图片高度,
            largeImgWidth : 大图的宽度,
            largeImgHeight : 大图的高度,   

        */

        $('.magnifier').Plugins('magnifier', {
            zoomWidth: 100,
            zoomHeight: 100,
            largeImgWidth: 500,
            largeImgHeight: 500
     });
 });

//选中的小图事件
$(function(){
    $('#picnow > ol li:first a').addClass('now');
    $('.productText .show-text').hide();
    $('.productText .show-text').eq(0).show();
});

//产品主页的产品点击对应的产品子页的图片显示

$(function(){
    $('#a1').click(function(){
         $('#picnow > ol  li:last a').addClass('now');
    });
});
