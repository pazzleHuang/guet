// 2015-05-14

// 1.二级导航点击事件

$(function(){
	var $nav = $('.mainNav ul > li');

	$nav.eq(0).hover(function(){           //首页
		$('.subnavbg').hide();
		$('.subNav').hide();
	});
	$nav.eq(6).hover(function(){              //联系我们
		$('.subnavbg').hide();
		$('.subNav').hide();
	});
	 
	 $nav.slice(1,6).hover(function(){            //二级导航背景和内容隐藏或显示
	 	// $(this).addClass('navclick').siblings().removeClass('navclick');
		$('.subnavbg').show();
		$('.subNav').eq(($(this).index()) - 1).show().siblings('.subNav').hide();
	 });

	 // 点击事件
	 //  $nav.slice(1,6).click(function(){
	 //  	$(this).addClass('navclick').siblings().removeClass('navclick');
		// $('.subnavbg').show();
		// $('.subNav').eq(($(this).index()) - 1).show().siblings('.subNav').hide();
	 // });

});


// 2.侧栏与内容切换
$(function(){
	var $sidebar = $('.sidebar ul > li');
	var $sidebox = $('.sidebar-box');
	var $sidetitle = $sidebox.find('.choiseTitle');	      //标题
	var $sidetext = $sidebox.find('maintext');           //主要内容
	$('.maintext').eq(0).show().siblings('.maintext').hide();


	// 2.侧边导航自动选1
	var $sidebar = $('.sidebar ul > li');
	$sidebar.not(':first').click(sidebarClick);

		function sidebarClick(){
			//var thistext = $(this).text();		
			//$sidetitle.text(thistext);             //标题显示和侧栏一样的文字
			$('.maintext').eq(($(this).index()) - 1).show().siblings('.maintext').hide();	
			//$(".position2").text(thistext);            //位置字体显示
		}	
});


//鼠标离开二级导航时内容消失
$(function(){
	$('.subNav').mouseleave(function(){
		$('.subnavbg').hide();
		$('.subNav').hide();
	});
});



//侧栏添加样式
$(function(){ 

    $('.sidebar li a').each(function(){   //遍历索引,侧边导航
        $this = $(this);
        if($this[0].href == String(window.location.href)){ //与当前网页url一样的就添加css样式
            $this.parent().addClass('sidebar-click');
        }
    });

        $('.mainNav li a').each(function(){   //遍历索引，主导航
        $this = $(this);
        if($this[0].href == String(window.location.href)){ //与当前网页url一样的就添加css样式
            $this.addClass('navclick');
        }
    });


});



// 3.新闻页面的切换
// $(function(){
// 	var $exhibHover =  $(".exhibition p");

// 	$exhibHover.not(':first').hover(function(){
// 		$(this).addClass('exhib-hover').siblings().removeClass('exhib-hover');
// 	});
// });

// 4.二级导航跳转到响应的界面事件
// $(function(){
// 	// 401.页面跳转时自动显示第一个侧栏的内容
// 	var secondSideText = $(".sidebar ul > li").eq(1).text();
// 	$(".position2").text(secondSideText);

// 	// 402.二级导航点击位置文字一样
// 	var $subbox = $('.subbox');
// 	var $subNav = $('.subNav dl > dd');	
// 	var $sidebar = $('.sidebar ul > li');

// 	$subNav.click(function(){
// 		var subNavText = $(this).text();

// 		$('.maintext').eq(($(this).index())).show().siblings('.maintext').hide();
// 		$(".position2").text(subNavText);     //位置文字对应显示
// 		//侧栏显示为选中状态
// 		$sidebar.eq(($(this).index()) + 1).addClass("sidebar-click").siblings().removeClass("sidebar-click");                              
// 	});
// });

// 5.news.html页面图片新闻触碰遮罩效果

// $(function(){
// 	var $newsCont = $('.news-box .news-cont');

// 	$newsCont.hover(function(){
// 		$("<div id='shade'><div>").appendTo($(this));
// 		$("<p class='shadeClickShow'><a>点击查看详情</a></p>").appendTo($(this));
// 		$('.shadeClickShow a').attr('href','newView1.php?id=<?php echo $rs["id"]; ?>');
// 	},function(){
// 		$("#shade").detach();
// 		$(".shadeClickShow").detach();
// 	});

// 	$('.shadeClickShow').click(function(){

// 	})
// });

// 6.侧栏与导航
$(function(){
	//var array = new Array( "About", "News","Product","Cooperate","Develop");
	// 此处代码不够简洁
	// 从数组角度考虑遇到问题了
	if(String(window.location.pathname).indexOf("About") != -1){
		$('.mainNav li').eq(1).find('a').addClass('navclick');
	}
	if(String(window.location.pathname).indexOf("News") != -1){
		$('.mainNav li').eq(2).find('a').addClass('navclick');
	}
	if(String(window.location.pathname).indexOf("Product") != -1){
		$('.mainNav li').eq(3).find('a').addClass('navclick');
	}
	if(String(window.location.pathname).indexOf("Cooperate") != -1){
		$('.mainNav li').eq(4).find('a').addClass('navclick');
	}
	if(String(window.location.pathname).indexOf("Develop") != -1){
		$('.mainNav li').eq(5).find('a').addClass('navclick');
	}


	// 细分的导航：新闻分页
	if(String(window.location.pathname).indexOf("newView1") != -1){
		$('.sidebar li').eq(1).addClass('sidebar-click');
	}
	if(String(window.location.pathname).indexOf("newView2") != -1){
		$('.sidebar li').eq(2).addClass('sidebar-click');
	}
	if(String(window.location.pathname).indexOf("newView3") != -1){
		$('.sidebar li').eq(3).addClass('sidebar-click');
	}

});