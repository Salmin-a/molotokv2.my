$(document).ready(function(){
	if($('div.project div.result div.group').length) {
		$('div.project div.result div.group div.group-properties').click(function(){
			if ($(this).parent().hasClass('active')) {
				$(this).parent().removeClass('active');
			}
			else {
				$(this).parent().addClass('active');
			}
		});
	}
});