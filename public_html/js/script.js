/**
 * Created by Emily Rose on 5/31/2017.
 */
$(document).ready(function() {
	var count = 0
	var links = ["#section1", "section2", "section3", "section4", "section5"]
	$("#button").click(function(event){
		count += 1
		$('html, body').animate({scrollIntoView: links[count]},800);
	});
});

