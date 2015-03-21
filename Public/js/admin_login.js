$(document).ready(function(){

	 // 判断是否包含中英文特殊字符，除英文"-_"字符外
    jQuery.validator.addMethod("isStr", function(value, element) {
         var reg = RegExp(/[(\ )(\`)(\~)(\|)(\[)(\])(\<)(\>)(\/)(\~)(\|)=]+/);
         return this.optional(element) || !reg.test(value);
    }, "含有中英文特殊字符");
	// 表单
    $("#loginForm").validate({
        rules: {
        	userName:{
        		required:true,
        		rangelength:[4,20],
            	isStr:true
            },userPass: {
        		required:true,
        		rangelength:[6,12],
                isStr:true
            },verify:{
            	required:true,
            	rangelength:[4,4]
            }
        },
        messages: {
        	userName:{
        		required:"请输入登陆账号！",
        		rangelength:"登陆账号长度不对，4-20个字符"
            },userPass: {
        		required:"请输入登陆密码",
        		rangelength:"登陆密码长度不对，6-12个字符"
            },verify:{
            	required:"请输入验证码！",
            	rangelength:"验证码长度不对，4位数字！"
            }
        },
        errorPlacement:function(error,e)
        {
        	var str = $(error).html();
        	art.dialog.tips(str,2);
        },
        onfocusout: function(element) { $(element).valid(); }
    });


});

function fleshVerify(){
    //重载验证码
    var time = new Date().getTime();
    var cpath = $("#cpath").val();
    $("#verifyImg").attr("src",cpath+"/index.php/verify/"+time);
 }

function login()
{
	var bo = $("#loginForm").valid();
	if(bo)
	{
		var cpath = $("#cpath").val();
		var url =cpath+"/index.php/login";
		subForm(url);
	}

}

function subForm(url)
{
	var userName = $("#userName").val();
	var userPass = $("#userPass").val();
	var verify = $("#verify").val();
	var cpath = $("#cpath").val();
	var dialog = art.dialog({id: 'N3690',title:"正在登陆",esc:false, lock: true,}).show();
	var options = {
			url : url,
			type : 'post',
			dataType : 'json',
			data : {userName:userName,userPass:userPass,verify:verify},
			success : function(data) {
				var msg = data.msg;
				var errorcode = data.errorcode;
				art.dialog.tips(msg, 2);
				if(errorcode==-1)
				{
					window.location.href=cpath+"/index.php/admin";
				}else{
					$("#userPass").val("");
					$("#verify").val("");
					dialog.close();
				}
			}
		};

		$.ajax(options);
		return false;
}