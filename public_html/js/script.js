/**
 * Created by Emily Rose on 5/31/2017.
 */
$(function() {
	$("#button").on("click", function() {
		$("body").animate({"scrollTop": window.scrollY-300}, 1000);
		return false;
	});
});