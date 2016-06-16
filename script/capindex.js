// 1.滚轮切换功能
$(function(){
	var $nav = $("#nav ul > li");
	var len = 0;
	var $box = $(".box");

	$box.mousewheel(function(y){
		len += y;
		len2 = -len - 1;
		// 浏览器兼容
		var scrollTop = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;

		// len2对应的是导航的index
		//对应的导航进行切换
		//if 判断鼠标的滚轮方向！
		//终于完成了！^_^o~ 努力！
		if(len2 >= 0 && len2 < 7){
			
			if(y > 0){				
				$nav.eq(len2).find('a').css('color', '#fff').parent().siblings().find("a").css('color', '#115481');
				$nav.eq(len2).stop().animate({backgroundPositionY: '-50px'},100)
				.siblings().stop().animate({backgroundPositionY: 0},300);
				$(".pic" ).eq(len2).stop().animate({top: "0px"}).siblings().stop().animate({top: "-500px"});
				//alert(len2);
				$('#nav ul > li').removeClass("navclick");
				}
			if(y < 0){
				//alert(len2);
				$nav.eq(len2).find('a').css('color', '#fff').parent().siblings().find("a").css('color', '#115481');
				$nav.eq(len2).stop().animate({backgroundPositionY: '-50px'},100).siblings().stop().animate({backgroundPositionY: 0},300);
				$(".pic" ).eq(len2).stop().animate({top: "0px"}).siblings().stop().animate({top: "-500px"});
				$('#nav ul > li').removeClass("navclick");

			}
		}else if(len2 >= 7){
			if(y < 0){
				return len = -6;
			}			
		}else{
			if(y > 0){
				return len = 0;
			}
		}

	});
});

// 2015-05-18
// 2.在招职位信息标签切换
$(function(){
	var $tableTab = $(".tab table > tbody");
	$tableTab.eq(0).show();
	var $num2 = $(".num2 ul > li");
	$num2.eq(0).addClass("numclick");
	$num2.click(tableTabNum);

	function tableTabNum() {

	$(this).addClass("numclick").siblings().removeClass("numclick");
	$tableTab.eq($(this).index()).show().siblings("tbody").hide();

}
});



// 3.导航点击事件
$(function(){
	var $nav = $("#nav ul >li");	

		$nav.click(function(){
		var index = $(this).index();
		$(this).addClass("navclick").siblings().removeClass("navclick");
		$(".pic" ).eq(index).stop().animate({top: "0px"}).siblings().stop().animate({top: "-500px"});
	});

});

// 4.问与答页面：为每一个问题前面添加按钮，显示内容和隐藏
$(function(){
	var $question1 = $("#pic7 .qnalist > h5");
	$question1.prepend("<div class='up'></div>");

	$question1.click(function(){
		var rindex = $(this).index();
		$(this).next().show().siblings("p").hide();
		$(this).find(".up").css({"border-top-color":"#3F67A2"});
	}); 
});

// 5.宣讲日期 点击图案出现不同的学校
$(function(){
	var $school = $("#pic4 ul > li");
	$school.eq(0).addClass("schoolclick");
	$(".hiretext").eq(0).show();

	//setInterval(function(){

		$school.hover(function(){
			$(this).addClass("schoolclick").siblings().removeClass("schoolclick");
			var sindex = $(this).index();
			switch(sindex){
				case 0 : $(".now").stop().animate({left : "310px"},50); break;
				case 1 : $(".now").stop().animate({left : "580px"},50); break;
				case 2 : $(".now").stop().animate({left : "848px"},50); break;
				default: break;
			}
			$(this).find("img").attr('src', '../images/capture/4_02.jpg');
			$(this).siblings("li").find("img").attr('src', '../images/capture/4_01.jpg');
			$(".hiretext").eq(sindex).show().siblings(".hiretext").hide();
		});
	//},1000);

});



