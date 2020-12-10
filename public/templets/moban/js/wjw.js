$(document).ready(function(){
	$("#xxlist li").has("img").removeClass("notpli").addClass("tpli");
	$("#xxml li:odd").css("background-color","#E5FAFF")
	$("#xxml li:even").css("background-color","#F6F6F6")
	
	$("#websitemap tr:odd").css("background-color","#F6F6F6")
	$("#websitemap tr:even").css("background-color","#E5FAFF")
	
	var size=16;
	$("#a_jia").click(function(){
		if(size<20){
			size+=2;
			$("#zoomcon").find("*").css("font-size",size+"px");
		}
	});
	$("#a_jian").click(function(){
		if(size>12){
			size-=2;
			$("#zoomcon").find("*").css("font-size",size+"px");
		}
	});
    


});
