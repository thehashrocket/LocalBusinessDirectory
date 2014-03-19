$(document).ready(function() {

$(".stripeMe tr").mouseover(function() {$(this).addClass("over");}).mouseout(function() {$(this).removeClass("over");});
$(".stripeMe tr:even").addClass("alt");						   
	jQuery(function(){
		jQuery('ul.sf-menu').superfish();
	});
}); 

