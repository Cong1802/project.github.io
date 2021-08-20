

				$(window).scroll(function(){
					var scroll = $(this).scrollTop();
					if(scroll > "125")
					{
						console.log(scroll)
						$(".menu_main").css("position","fixed");
						$(".menu_main").css("top","0px");
						//$(".menu_main").css("left","0");
						$(".menu_main").css("width","100%");
					}
					else
					{
						$(".menu_main").css("position","relative");
					}
				})
				$(".btn_sidebar").on("click",function(){
					var sidebar = $(".menu_main").css("left");
					if(sidebar == "-120px")
					{
						$(".menu_main").css("left","0px");
					}
					else
					{
						$(".menu_main").css("left","-120px");
					}
				})

	


