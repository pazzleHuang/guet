jQuery.extend({
	easing:{
		backEaseIn:function(e,g,a,d){
			var f=a+d;
			var b=1.70158;
			return 
			f*(e/=1)*e*((b+1)*e-b)+a
		},backEaseOut:function(e,g,a,d){
			var f=a+d;
			var b=1.70158;
			return f*((e=e/1-1)*e*((b+1)*e+b)+1)+a
		},backEaseInOut:function(e,g,a,d){
			var f=a+d;
			var b=1.70158;
			if((e/=0.5)<1){
				return f/2*(e*e*(((b*=(1.525))+1)*e-b))+a
			}else{
				return f/2*((e-=2)*e*(((b*=(1.525))+1)*e+b)+2)+a
			}
		},bounceEaseIn:function(e,g,b,d){
			var f=b+d;
			var a=this.bounceEaseOut(1-e,1,0,d);
			return f-a+b
		},bounceEaseOut:function(d,f,a,b){
			var e=a+b;
			if(d<(1/2.75)){
				return e*(7.5625*d*d)+a
			}else{
				if(d<(2/2.75)){
					return e*(7.5625*(d-=(1.5/2.75))*d+0.75)+a
				}else{
					if(d<(2.5/2.75)){
						return e*(7.5625*(d-=(2.25/2.75))*d+0.9375)+a
					}else{
						return e*(7.5625*(d-=(2.625/2.75))*d+0.984375)+a
					}
				}
			}
		},circEaseIn:function(d,f,a,b){
			var e=a+b;
			return -e*(Math.sqrt(1-(d/=1)*d)-1)+a
		},circEaseOut:function(d,f,a,b){
			var e=a+b;
			return e*Math.sqrt(1-(d=d/1-1)*d)+a
		},circEaseInOut:function(d,f,a,b){
			var e=a+b;
			if((d/=0.5)<1){
				return -e/2*(Math.sqrt(1-d*d)-1)+a
			}else{
				return e/2*(Math.sqrt(1-(d-=2)*d)+1)+a
			}
		},cubicEaseIn:function(d,f,a,b){
			var e=a+b;
			return e*(d/=1)*d*d+a
		},cubicEaseOut:function(d,f,a,b){
			var e=a+b;
			return e*((d=d/1-1)*d*d+1)+a
		},cubicEaseInOut:function(d,f,a,b){
			var e=a+b;
			if((d/=0.5)<1){
				return e/2*d*d*d+a
			}else{
				return e/2*((d-=2)*d*d+2)+a
			}
		},elasticEaseIn:function(g,i,a,f){
			var h=a+f;
			if(g==0){
				return a
			}if(g==1){
				return h
			}
			var e=0.25;
			var d;
			var b=h;
			if(b<Math.abs(h)){
				b=h;
				d=e/4
			}else{
				d=e/(2*Math.PI)*Math.asin(h/b)
			}return -(b*Math.pow(2,10*(g-=1))*Math.sin((g*1-d)*(2*Math.PI)/e))+a
		},elasticEaseOut:function(g,i,a,f){
			var h=a+f;
			if(g==0){
				return a
			}if(g==1){
				return h
			}
			var e=0.25;
			var d;
			var b=h;
			if(b<Math.abs(h)){
				b=h;d=e/4
			}else{
				d=e/(2*Math.PI)*Math.asin(h/b)
			}
			return -(b*Math.pow(2,-10*g)*Math.sin((g*1-d)*(2*Math.PI)/e))+h
		},expoEaseIn:function(d,f,a,b){
			var e=a+b;
			return(d==0)?a:e*Math.pow(2,10*(d-1))+a-e*0.001
		},expoEaseOut:function(d,f,a,b){
			var e=a+b;
			return(d==1)?e:b*1.001*(-Math.pow(2,-10*d)+1)+a
		},expoEaseInOut:function(d,f,a,b){
			var e=a+b;
			if(d==0){
				return a
			}if(d==1){
				return e
			}if((d/=0.5)<1){
				return e/2*Math.pow(2,10*(d-1))+a-e*0.0005
			}else{
				return e/2*1.0005*(-Math.pow(2,-10*--d)+2)+a
			}
		},quadEaseIn:function(d,f,a,b){
			var e=a+b;
			return e*(d/=1)*d+a
		},quadEaseOut:function(d,f,a,b){
			var e=a+b;
			return -e*(d/=1)*(d-2)+a
		},quadEaseInOut:function(d,f,a,b){
			var e=a+b;
			if((d/=0.5)<1){
				return e/2*d*d+a
			}else{
				return -e/2*((--d)*(d-2)-1)+a
			}
		},quartEaseIn:function(d,f,a,b){
			var e=a+b;
			return e*(d/=1)*d*d*d+a
		},quartEaseOut:function(d,f,a,b){
			var e=a+b;
			return -e*((d=d/1-1)*d*d*d-1)+a
		},quartEaseInOut:function(d,f,a,b){
			var e=a+b;
			if((d/=0.5)<1){
				return e/2*d*d*d*d+a
			}else{
				return -e/2*((d-=2)*d*d*d-2)+a
			}
		},quintEaseIn:function(d,f,a,b){
			var e=a+b;
			return e*(d/=1)*d*d*d*d+a
		},quintEaseOut:function(d,f,a,b){
			var e=a+b;
			return e*((d=d/1-1)*d*d*d*d+1)+a
		},quintEaseInOut:function(d,f,a,b){
			var e=a+b;
			if((d/=0.5)<1){
				return e/2*d*d*d*d*d+a
			}else{
				return e/2*((d-=2)*d*d*d*d+2)+a
			}
		},sineEaseIn:function(d,f,a,b){
			var e=a+b;
			return -e*Math.cos(d*(Math.PI/2))+e+a
		},sineEaseOut:function(d,f,a,b){
			var e=a+b;
			return e*Math.sin(d*(Math.PI/2))+a
		},sineEaseInOut:function(d,f,a,b){
			var e=a+b;
			return -e/2*(Math.cos(Math.PI*d)-1)+a
		}
	}
});

// 插件 end


$(document).ready(function(){
	var G=numberOfScreens;
	
	for(var D=1;D<=G;D++){
		$("#name"+D).html(blockName[D])
		}if(hoverEffect){
			for(D=1;D<=G;D++){
				$("<style>#wrapper"+D+" div:hover{border: 1px #fff solid;box-shadow: 0px 0px 5px #fff;margin-left:4px;margin-top:4px;}</style>").appendTo("head")
			}
		}
		if(searchEngine=="google"){
			search="http://www.google.com/search"
		}
		//计算长度
		$("form").attr("action",search);
		$("input:text").css("background","#fff url(lib/"+searchEngine+"-back.png) center right no-repeat");
		var E=$(window).width();
		var F=$(window).height();
		var y=Math.floor((E-975)/2);
		var x=y-1045;
		var w=y-2090;
		//var v=y-3135;
		var K=Math.floor((F-480)/2)-80;
		$("#place").css({left:y,top:K});
		var k=1;
		$("#wrapper1 input:text").focus();
		var e=true;

		//第一版
		function c(){
			$("#wrapper1 input:text").focusout();
			e=false;
			$("#place").animate({left:x},1000,"circEaseOut",function(){
				$("#wrapper2 input:text").focus();
				e=true;
				k=2
			});
			$("#button1to2").hide();
			$("#button2to1").show();
			if(G>2){
				$("#button2to3").show();
				$("#button3to2").hide()
			}
		}
		//第2版 2.1
		function o(){
			$("#wrapper2 input:text").focusout();
			e=false;
			$("#place").animate({left:y},1000,"circEaseOut",function(){
				$("#wrapper1 input:text").focus();
				e=true;
				k=1
			});
			$("#button1to2").show();
			$("#button2to1").hide();
			if(G>2){
				$("#button2to3").hide();
				$("#button3to2").hide()
			}
		}
		// 第2版 2.2
		function m(){
			$("#wrapper2 input:text").focusout();
			e=false;
			$("#place").animate({left:w},1000,"circEaseOut",function(){
				$("#wrapper3 input:text").focus();
				e=true;
				k=3
			});
			$("#button1to2").hide();
			$("#button3to2").show();
			$("#button2to1").hide();
			$("#button2to3").hide()
		}
		// 第3版 3.1
		function J(){
			$("#wrapper3 input:text").focusout();
			e=false;
			$("#place").animate({left:x},1000,"circEaseOut",function(){
				$("#wrapper2 input:text").focus();
				e=true;
				k=2
			}
		);
		$("#button1to2").hide();
		$("#button3to2").hide();
		$("#button2to1").show();
		$("#button2to3").show()
	}
	// 第3版 3.2
	function H(){
		$("#wrapper3 input:text").focusout();
		e=false;
		$("#place").animate({left:v},1000,"circEaseOut",function(){
			$("#wrapper4 input:text").focus();
			e=true;k=4
		});
		$("#button2to3").hide();
		$("#button4to3").show();
		$("#button3to2").hide();
		$("#button3to4").hide()
	}


// 点击方向按钮事件
	if(G>1){
		$("#button1to2").click(function(){
			c()
		});
		$("#button2to1").click(function(){
			o()
		});
		if(G>2){
			$("#button2to3").click(function(){
				m()
			});
			$("#button3to2").click(function(){
				J()
			});
			if(G>3){
				$("#button3to4").click(function(){
					H()
				});
				$("#button4to3").click(function(){
					g()
				});
			}
		}
	}

if(G<3){
	$("#name3").detach();
	$("#wrapper3").detach();
	$("#button2to3").detach();
	$("#button3to2").detach()
}if(G<2){
	$("#name2").detach();
	$("#wrapper2").detach();
	$("#button1to2").detach();
	$("#button2to1").detach()
}
});

var hoverEffect=true;
var searchEngine="google";
var numberOfScreens=9;
var blockName=new Array();
blockName[1]="产品1";
blockName[2]="产品2";
