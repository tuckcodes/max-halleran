/**
 * Created by Emily Rose on 5/31/2017.
 */
//javascript loop to count clicks and scroll to specific divs on click
$(document).ready(function() {
	var count = 0;
	var links = ["#waypoint-1", "#waypoint-2", "#waypoint-3", "#waypoint-4", "#waypoint-5", "#waypoint-top"];
	console.log("string");
	$("#button").click(function(event) {
		console.log(count);

		var divId = links[count];
		var currentDiv = $(divId);
		var currentDivOffset = currentDiv.offset();
		var currentDivOffsetTop = currentDivOffset.top;

		$('html, body').animate({scrollTop: currentDivOffsetTop}, 800);
		count += 1;
		if(count === 6) {
			count = 0;
		}
	}); //end if condition
}); //end document ready



