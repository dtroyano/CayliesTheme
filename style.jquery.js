var $j = jQuery.noConflict();

function commentBubble(speed){
	$j(".comments").mouseover(function(){
		$j('.comments').stop().animate({width: '75px',height: '65px'},speed, 'swing');
		$j('.commentnum').stop().animate({fontSize: '1.6em'},speed, 'linear');
	});
	$j(".comments").mouseout(function(){
		$j('.comments').stop().animate({width: '70px',height: '60px'},speed, 'swing');
		$j('.commentnum').stop().animate({fontSize: '1.5em'},speed, 'linear');
	});
}


$j(function (){
	commentBubble(500);
});