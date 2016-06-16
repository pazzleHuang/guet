/**
 * @author Alexander Farkas
 * v. 1.02
 */
    (function($) {  
      
    var div = document.createElement('div'),  
        rposition = /([^ ]*) (.*)/;  
        
    if(div.style.backgroundPositionX !== '') {  
        $(['X', 'Y']).each(function( i, letter ) {  
            var property = 'backgroundPosition' + letter,  
                isX = letter == 'X';  
            $.cssHooks[property] = {  
                set: function(elem, value) {  
                    var current = elem.style.backgroundPosition;  
                    elem.style.backgroundPosition = (isX? value + ' ' : '' ) + (current? current.match(rposition)[isX+1] : '0') + (isX? '' : ' ' + value);  
                },  
                get: function(elem, computed) {  
                    var current = computed?  
                        $.css(elem, 'backgroundPosition') :  
                        elem.style.backgroundPosition;  
                    return current.match(rposition)[!isX+1];  
                }  
            };  
            $.fx.step[property] = function(fx) {  
                $.cssHooks[property].set(fx.elem, fx.now + fx.unit);  
            }  
        });  
    }  
    div = null;  
      
    })(jQuery);  

    // 兼容 firfox/IE/chrome
    $(document).ready(function(){
    	$('#nav ul > li').hover(function(){
            $(this).find('a').stop().css('color', '#fff'),
    		$(this).stop().animate({backgroundPositionX: 0}),
    		$(this).stop().animate({backgroundPositionY: '-50px'},100);
    		// $(this).css('backgroundPositionY','-50px');
    	},function(){
             $(this).find('a').stop().css('color', '#115481'),
    		$(this).stop().animate({backgroundPositionX: 0})
    		$(this).stop().animate({backgroundPositionY: 0},300);
    	});
    });	