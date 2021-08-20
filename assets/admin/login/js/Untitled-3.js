// JavaScript Document
$(".login_admin2").on("click",function(){
	var account = $(".name").val();
	var password = $(".pass").val();
	$(".hello").remove();
	$(".hello2").remove();
	if(account=="")
		{
			$(".name").parent().append("<li class='hello' style='color:red'>Vui lòng nhập tài khoản</li>");
			$(".name").css("border-color","red")
		}
	else
		{
			$(".hello").remove();
			$(".name").css("border-color","black")
		}
	if(password=="")
		{
			$(".pass").parent().append("<li class='hello2' style='color:red'>Vui lòng nhập mật khẩu</li>");
			$(".pass").css("border-color","red")
		}
	else
		{
			$(".hello2").remove();
			$(".pass").css("border-color","black")
		}
})