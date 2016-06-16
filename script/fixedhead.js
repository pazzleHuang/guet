

$(function(){
	var _defautlTop = $('#nav').offset().top;   //距离头顶的距离
	var _defautlLeft = $('#nav').offset().left;   //距离左边的距离

	var _position = $('#nav').css('position');   //默认值
	var _top = $('#nav').css('top');
	var _left = $('#nav').css('left');
	var _left = $('#nav').css('left');
	var _zIndex = $('#nav').css('z-index');

	$(window).scroll(function(){
		 if($(this).scrollTop() > _defautlTop){ 
			if($.browser.msie && $.browser.version=="6.0"){  //IE6浏览器兼容
                $("#nav").css({'position':'absolute','top':eval(document.documentElement.scrollTop),'left':_defautlLeft,'z-index':99999});
                //防止出现抖动
                $("html,body").css({'background-image':'url(about:blank)','background-attachment':'fixed'});
            }
         	else{
                	$('#nav').css({'position':'fixed','top':0,'left':_defautlLeft,'z-index':99999}).css({'box-shadow':'#000 0 0 5px'});
                	
            	}
         }
        else{
            $('#nav').css({'position':_position,'top':_top,'left':_left,'z-index':_zIndex}).css({'box-shadow':'none'});
            
        }
	});
});
