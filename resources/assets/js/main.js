$(document).ready(function() {

	$('#menu-toggle').click(function(){
		$(this).toggleClass('open');
	});
	$('#offCanvasInner').click(function(){
		if($('#menu-toggle').hasClass('open')){
			$('#menu-toggle').removeClass('open');
		}
	});

});