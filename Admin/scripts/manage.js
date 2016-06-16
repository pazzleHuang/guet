// 2015-05-05
// manage.html
$(function(){
	// 添加按钮事件
	$('#mainthings #add').click(function(){
		$('.hidebackground').show();
		$('#addcontent').show();
	});
	// 点击关闭窗口
	$('.close1').click(function(){
		$('.hideContent').hide();
		$('.hidebackground').hide();
	})
	// 侧栏点击事件
	var $leftbar = $('.leftbar li a');
	$leftbar.click(function(){
		// alert($(this).text());
		$(this).parent().addClass('leftbarhover').siblings().removeClass('leftbarhover');
	});
});

// 表格显示的内容
$(function(){
	$('#table1 tr > th:eq(0)').css('width','50px');
	// $('#table1 tr > th:eq(2)').css('width','250px');
});

// 当前页面
$(function(){ 

    $('.leftbar li a').each(function(){   //遍历索引
        $this = $(this);
        if($this[0].href == String(window.location.href)){ //与当前网页url一样的就添加css样式
            $this.parent().addClass('leftbarhover');
        }
    });
 });

$(function(){
	if(String(window.location.pathname).indexOf("user") != -1){
		$('.leftbar li').eq(1).find('a').addClass('leftbarhover');
	}
	if(String(window.location.pathname).indexOf("pic") != -1){
		$('.leftbar li').eq(2).find('a').addClass('leftbarhover');
	}
	if(String(window.location.pathname).indexOf("product") != -1){
		$('.leftbar li').eq(3).find('a').addClass('leftbarhover');
	}
	if(String(window.location.pathname).indexOf("news") != -1){
		$('.leftbar li').eq(4).find('a').addClass('leftbarhover');
	}
	if(String(window.location.pathname).indexOf("feedback") != -1){
		$('.leftbar li').eq(5).find('a').addClass('leftbarhover');
	}
});

// 用户点击查询按钮
// $(function(){
// 	$('#search').click(function(){
// 		$('#table1 .tbody').show();
// 	});
// })

