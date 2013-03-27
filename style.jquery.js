function commentBubble(speed){
	$(".comments").mouseover(function(){
		$('.comments').stop().animate({width: '75px',height: '75px'},speed, 'swing');
		$('.commentnum').stop().animate({fontSize: '1.6em'},speed, 'linear');
	});
	$(".comments").mouseout(function(){
		$('.comments').stop().animate({width: '70px',height: '70px'},speed, 'swing');
		$('.commentnum').stop().animate({fontSize: '1.5em'},speed, 'linear');
	});
}


$(function (){
	commentBubble(500);
});