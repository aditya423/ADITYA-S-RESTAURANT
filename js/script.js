$(function () {
	$("#navbarToggle").blur(function (event) {
		var screenWidth = window.innerWidth;
		if (screenidth < 768) {
			$("#collapsable-nav").collapse('hide');
		}
	});
});