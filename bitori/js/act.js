$(document).ready(function(){
	var temp;
  $(".p-rec").mouseover(function(){
	  $(this).find(".p-shadow").stop();
	  $(this).find(".p-shadow").css("opacity","0");
	  $(this).find(".p-shadow").animate({opacity:"1"}, 400);
    $(this).find(".p-shadow").css("background-Image", "url(http://p1.bpimg.com/567571/632842cf75d0fd95.png)");
	$(this).find(".p-link").css("top","0px");
	//$(this).find(".p-link").css("height","150px");
		  });
	$(".p-img").mouseover(function(){
		//alert($(this).css("background-image"));
		$(document).find(".p-slider").css('background-image',temp); 
		$(document).find(".p-slimg").stop();
		$(document).find(".p-slimg").dequeue();
		$(document).find(".p-slimg").css("opacity","0");
			
			$(document).find(".p-slimg").animate({opacity:"1"}, 400);
			
			//$(document).find(".p-slimg").animate({opacity:"1"}, 400);
			$(document).find(".p-slimg").css('background-image',$(this).css("background-image")); 
			
			setTimeout(function () {temp = $(document).find(".p-slimg").css("background-image"); }, 50);
		  });
		  
  $(".p-rec").mouseout(function(){
	  $(this).find(".p-shadow").stop();
	  $(this).find(".p-shadow").css("opacity","0");
	  $(this).find(".p-shadow").animate({opacity:"1"}, 400);
	$(this).find(".p-shadow").css("background-Image", "url(http://p1.bqimg.com/4851/5460ee8dc73c72d4.png)");
	$(this).find(".p-link").css("top","75px");

	//$(this).find(".p-link").css("height","150px");
	  });
  $(".p-llay").mouseover(function(){
	   $(this).find(".p-link2").stop();
	$(this).find(".p-link2").animate({height:"50px"}, 200);
	  });
  $(".p-llay").mouseout(function(){
	   $(this).find(".p-link2").stop();
	$(this).find(".p-link2").animate({height:"30px"}, 200);
	  });
  $(".p-hp").mouseover(function(){
	   $(".p-me").stop();
	   $(".p-head").stop();
	   $(".p-head").animate({top:"10px"}, 200);
	$(".p-me").animate({height:"200px"}, 200);
	  });
  $(".p-hp").mouseout(function(){
	 $(".p-me").stop();
	 $(".p-head").stop();
	$(".p-head").animate({top:"0px"}, 200);
	$(".p-me").animate({height:"0px"}, 200);
	  });
 $(".p-toparea").mouseover(function(){
		$(".p-word").stop();
		$(".p-word").fadeIn(200);
	  });
  $(".p-toparea").mouseout(function(){
	  $(".p-word").stop();
	$(".p-word").fadeOut(200);
	  });
	var w =document.body.offsetWidth;
		if (w < 1300) {
			$(".p-inbox").css("width","980px");
			$(".p-dq").css("width","980px");
			$(".p-ontop").css("width","980px");
			$(".plist").css("width","980px");
			$(".p-midshow").css("width","980px");
			$(".p-siderec").css("width","520px");
			$(".p-content").css("width","980px");
		}
		else {
			$(".p-inbox").css("width","1160px");
			$(".p-dq").css("width","1160px");
			$(".p-ontop").css("width","1160px");
			$(".plist").css("width","1160px");
			$(".p-midshow").css("width","1160px");
			$(".p-siderec").css("width","720px");
			$(".p-content").css("width","1160px");
		}
	$(document).find(".p-slimg").css('background-image',$(document).find(".p-img").css("background-image")); 
	$(document).find(".p-slider").css('background-image',$(document).find(".p-img").css("background-image")); 
	$(window).resize(function(){////////
	var w =document.body.offsetWidth;
	var yy =document.body.scrollWidth;
		if (w < 1300) {
			$(".p-dq").css("width","980px");
			$(".p-ontop").css("width","980px");
			$(".p-inbox").css("width","980px");
			$(".plist").css("width","980px");
			$(".p-midshow").css("width","980px");
			$(".p-siderec").css("width","520px");
			$(".p-content").css("width","980px");
		}
		else {
			$(".p-dq").css("width","1160px");
			$(".p-inbox").css("width","1160px");
			$(".p-ontop").css("width","1160px");
			$(".plist").css("width","1160px");
			$(".p-midshow").css("width","1160px");
			$(".p-siderec").css("width","720px");
			$(".p-content").css("width","1160px");
		}
}); 
});
