//验证输入信息

$(function(){
	$('#logname').focus();
	var cname1,cname2,cpwd1,cide;

	function chkreg(){
		if((cname1 == 'yes') && (cname2 == 'yes') && (cpwd1 == 'yes') && (cide == 'yes')){
			$('login-sub').attr('disabled',false);
			$('login-sub').css('background-color','#0067AC');
			//alert('1');
		}else{
			$('login-sub').attr('disabled',true);
		}
	}
	//2.用户名验证
	// 2.1
	$('#logname').blur(function (){
		//alert('1');
		name = $('#logname').val();
		cname2 = '';
		if(name.match(/^[a-zA-Z_]*/) == ''){
			$('.namespan').css('color','#F20013');   
			$('.namespan').text('必须以字母或者下划线开头');
			cname1 = '';
		}else if(name.length < 5){
			//alert('1');
			$('.namespan').css('color','#F20013');
			$('.namespan').text('用户名称必须大于5位');
			cname1 = '';
		}else{
			$('.namespan').css('color','#699F00');
			$('.namespan').text('用户名符合标准');
			cname1 = 'yes';
		}
		chkreg();
	}) ;

	// 2.2
	$('#logname').blur(function(){
		name = $('#logname').val();
		if(cname1 == 'yes'){
			xmlhttp.open('get','chkname.php?name='+name,true);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4){
					if(xmlhttp.status == 200){
						var msg = xmlhttp.responseText;
						if(msg == '1'){
							$('.namespan').css('color','#F20013');
							$('.namespan').text('用户名不存在！');
							cname2 = '';
						}else if(msg == '2'){
							$('.namespan').css('color','#699F00');
							$('.namespan').text('用户名正确！');
							cname2 = 'yes';
						}else{
							$('.namespan').css('color','#F20013');
							$('.namespan').text(msg);
							cname2 = '';
						}
					}
				}
				//检查是否要激活"注册"按钮
				chkreg(); 
			}
			xmlhttp.send(null);
		}
	});


	//3.密码验证
	$('#passwd').blur(function(){
		//alert('1');
		pwd = $('#passwd').val();
		if(pwd.length < 6){
			$('.pwdspan').css('color','#F20013');
			$('.pwdspan').text('密码长度至少需要6位');
			cpwd1 = '';
		}else if(pwd.length >= 6 && pwd.length < 12){
			$('.pwdspan').css('color','#699F00');
			$('.pwdspan').text('密码格式正确');
			cpwd1 = 'yes';
		}else if((pwd.match(/^[0-9]*$/)!=null) || (pwd.match(/^[a-zA-Z]*$/) != null )){
			$('.pwdspan').css('color','#699F00');
			$('.pwdspan').text('密码格式正确');
			cpwd1 = 'yes';
		}else{
			$('.pwdspan').css('color','#699F00');
			$('.pwdspan').text('密码格式正确');
			cpwd1 = 'yes';
		}
		chkreg();
	});

	//数字验证 
    $("#getcode_num").click(function(){ 
        $(this).attr("src",'code_num.php?' + Math.random()); 
    }); 

    $('#ide').blur(function(){
    	//alert('1');
    	code = $("#ide").val();
    	cide ='';
    	$.post("chk_code.php",{code:code},function(msg){
				if(msg==1){
					$('.idespan').css('color','#699F00');
					$('.idespan').text('验证码正确！');
					cide = 'yes';
				}else{
					$('.idespan').css('color','#F20013');
					$('.idespan').text('验证码错误！');
					cide = '';
				}
		});
    	chkreg();
    });

       

})



	




