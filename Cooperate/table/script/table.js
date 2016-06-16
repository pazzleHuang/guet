// table.js
$(function(){
// 1.导航
  $('.header-box li a').each(function(){   //遍历索引
        $this = $(this);
        if($this[0].href == String(window.location.href)){ //与当前网页url一样的就添加css样式
            $this.addClass('navclick');
        }
    });


})