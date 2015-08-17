$(document).ready(function() {
	function setEqualHeights(elArr) {
		var h = 0;
		$.each(elArr, function(index, value) {
			console.debug($(this));
		});
	}

	console.log('app.js');
	setEqualHeights([$('.story')]);
});