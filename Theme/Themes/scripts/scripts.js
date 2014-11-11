var tmp=-1;
$(document).ready(function(event)
{
	
	$(".mh-menu").show("fold",1000);

	$(".mh-menu div").bind('click',function(event){	
	var index = $(".mh-menu div" ).index( this );				//div clicked child
	$("#text").fadeOut(300);

	if(tmp!=index)
	{
		$(".content div").hide("blind",{direction:"verticle"},550).delay(400);
		//$(".mh-menu > div").animate({'padding-left':'10px'},200);	
		$(".mh-menu > div").css({'background-color':'rgba(0,0,0,0.7)'});

		$(".mh-menu > div span").animate({'color':'rgba(255,255,255,1'},200);
		$(".content > div").eq(index).show("blind",{direction:"horizontal"},550).css("opacity","1");
		$(".mh-menu > div span").eq(index).animate({'color':'white'},200);
		$(".mh-menu > div").eq(index).removeClass(".mh-menu div");
		
		$(".mh-menu > div").eq(index).animate({'background-color': 'rgba(255, 0, 0, 0.5)'},200);

		
	
	//Display heading clone in content
		$('.header').hide("slide",{direction: "up"},400);
		
		//Change heading
		setTimeout(function change(e) {
		var play=$(".mh-menu > div").eq(index).html();	
		$(".header").empty();
		$('.header').append(play);
		$(".header span").css({'color': '#ffffff'});
		$('.header').show("slide",{direction: "down"},400);},400);
	
		tmp=index;
	}		
	
	});	
});
