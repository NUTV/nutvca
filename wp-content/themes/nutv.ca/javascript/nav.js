$(document).ready(function(){
	$("#menuBar > a > img").hover(
		function(){
			src = $(this).attr("src");
			$(this).attr("src",src.substring(0,src.length-4)+"_over.jpg");
		},function(){
			$(this).attr("src",src);
		}
	);

});