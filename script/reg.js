//验证输入信息

$(function(){
	$('#regname').focus();
	var cname1,cname2,cpwd1,cpwd2,ccompany,cemail,cide;

	function chkreg(){
		if((cname1 == 'yes') && (cname2 == 'yes') && (cpwd1 == 'yes') && (cpwd2 == 'yes') && (ccompany == 'yes') && (cemail == 'yes')&& (cide == 'yes')){
			$('#regbtn').attr('disabled',false);
			$('#regbtn').css('background-color','#0067AC');
			//alert('1');
		}else{
			$('#regbtn').attr('disabled',true);
		}
	}
	//2.用户名验证
	//keyup() ’；每一个输入的时候就用正则表达式判断
	//blur() ：输入框失去焦点的时候判断
	//#c33a3a红色; #7DD942绿色 

	// 2.1
	$('#regname').blur(function (){
		//alert('1');
		name = $('#regname').val();
		//alert(name.length);
		cname2 = '';
		if(name.match(/^[a-zA-Z_]*/) == ''){
			$('.namespan').css('color','#C33A3A');   
			$('.namespan').text('必须以字母或者下划线开头');
			cname1 = '';
		}else if(name.length < 4){
			//alert('1');
			$('.namespan').css('color','#C33A3A');
			$('.namespan').text('用户名称必须大于4位');
			cname1 = '';
		}else{
			$('.namespan').css('color','#7DD942');
			$('.namespan').text('用户名符合标准');
			cname1 = 'yes';
		}
		chkreg();
	}) ;

	// 2.2
	$('#regname').blur(function(){
		name = $('#regname').val();
		if(cname1 == 'yes'){
			xmlhttp.open('get','chkname.php?name='+name,true);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4){
					if(xmlhttp.status == 200){
						var msg = xmlhttp.responseText;
						if(msg == '1'){
							$('.namespan').css('color','#7DD942');
							$('.namespan').text('用户名可以使用');
							cname2 = 'yes';
						}else if(msg == '2'){
							$('.namespan').css('color','#C33A3A');
							$('.namespan').text('用户名被占用！');
							cname2 = '';
						}else{
							$('.namespan').css('color','#C33A3A');
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


	//3.第一次密码验证
	$('#regpwd1').blur(function(){
		var pwd = $('#regpwd1').val();
		var pwd2 = $('#regpwd2').val();
		if(pwd.length < 6){
			$('.pwd1span').css('color','#C33A3A');
			$('.pwd1span').text('密码长度至少需要6位');
			cpwd1 = '';
		}else if(pwd.length >= 6 && pwd.length < 12){
			$('.pwd1span').css('color','#7DD942');
			$('.pwd1span').text('密码符合要求。密码强度：弱');
			cpwd1 = 'yes';
		}else if((pwd.match(/^[0-9]*$/)!=null) || (pwd.match(/^[a-zA-Z]*$/) != null )){
			$('.pwd1span').css('color','#7DD942');
			$('.pwd1span').text('密码符合要求。密码强度：中');
			cpwd1 = 'yes';
		}else{
			$('.pwd1span').css('color','#7DD942');
			$('.pwd1span').text('密码符合要求。密码强度：高');
			cpwd1 = 'yes';
		}
		if(pwd2 != ' ' && pwd != pwd2){
			$('.pwd2span').css('color','#C33A3A');
			$('.pwd2span').text('两次密码不一致');
			cpwd2 = '';
		}
		// else if(pwd2 != ' ' && pwd == pwd2){
		// 	$('.pwd2span').css('color','#7DD942');
		// 	$('.pwd2span').text('密码输入正确1');
		// 	cpwd2 = 'yes';
		// }
		chkreg();
	});

	//4.第二次密码验证
	$('#regpwd2').blur(function(){
		//alert('1');
		pwd1 = $('#regpwd1').val();
		pwd2 = $('#regpwd2').val();

		if(pwd1 == pwd2){
			if(pwd1 == '' && pwd2 == ''){
				$('.pwd2span').css('color','#C33A3A');
				$('.pwd2span').text('密码不能为空');
				cpwd2 = '';
			}else{
				$('.pwd2span').css('color','#7DD942');
				$('.pwd2span').text('密码输入正确2');
				cpwd2 = 'yes';
			}
		}else{
			$('.pwd2span').css('color','#C33A3A');
			$('.pwd2span').text('两次密码不一致');
			cpwd2 = '';
		}
		chkreg();
	});

	//5.1 公司验证
	$('#regcompany').blur(function(){
		//alert('1');

		company = /^[\u4e00-\u9fa5]*$/;

		$('#regcompany').val().match(company);
		if($('#regcompany').val().match(company) == null){
			$('.companyspan').css('color','#C33A3A');
			$('.companyspan').text('错误的输入，请输入汉字');
			ccompany = '';
		}else if($('#regcompany').val() == ''){
			$('.companyspan').css('color','#C33A3A');
			$('.companyspan').text('公司名称不能为空');
		}else {
			$('.companyspan').css('color','#7DD942');
			$('.companyspan').text('输入正确');
			ccompany = 'yes';
			
		}
		chkreg();
	});


	//5.2 邮箱验证
	$('#email').blur(function(){
		//alert('1');

		emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

		$('#email').val().match(emailreg);
		if($('#email').val().match(emailreg) == null){
			$('.emailspan').css('color','#C33A3A');
			$('.emailspan').text('错误的邮件格式');
			cemail = '';
		}else{
			$('.emailspan').css('color','#7DD942');
			$('.emailspan').text('输入正确');
			cemail = 'yes';
			
		}
		chkreg();
	});

	//数字验证 
    $("#regcheck").click(function(){ 
        $(this).attr("src",'code_num.php?' + Math.random()); 
    }); 

    $('#regide').blur(function(){
    	//alert('1');
    	code = $("#regide").val();
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