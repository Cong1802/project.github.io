// JavaScript Document
$(".button").on("click",function(){
	
	var width = $(".side-bar").css("width");
	if(width == "280px")
		{
			$(".side-bar").css("width","70px");
			
		
			$(".btnn").css("display","none");
			$(".btnx").css("display","block");
			$(".xxxx").css("margin","auto");
			$(".xx").css("display","none");
		}
	else
		{
			$(".side-bar").css("width","280px");
			$(".btnn").css("display","block");
			$(".btnx").css("display","none");
			$(".xx").css("display","block");
		
			
		}
})
$(".btn-none").on("click",function(){
	
	
		{
			$(".row_top").css("display","none");
			
		}
})