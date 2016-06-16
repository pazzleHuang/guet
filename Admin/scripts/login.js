// 2015-05-01
// login.php

$(function(){
	//数字验证 
    $("#getcode_num").click(function(){ 
        $(this).attr("src",'code_num.php?' + Math.random()); 
    }); 
     
})

// 用户输入是否正确的验证
// $(function(){
//     $('input[username]').bind({
//         focus:function(){
            
//                 this.placeholder=""; 
            
//     },
//     blur:function(){

//     }
//     });
// })


// $(function(){ 
    
//     $("#chk_num").click(function(){ 
//         var code_num = $("#code_num").val(); 
//         $.post("chk_code.php?act=num",{code:code_num},function(msg){ 
//             if(msg==1){ 
//                 alert("验证码正确！"); 
//             }else{ 
//                 alert("验证码错误！"); 
//             } 
//         }); 
//     }); 
// })