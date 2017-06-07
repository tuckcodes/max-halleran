/**
 * Created by Emily Rose on 5/30/2017.
 */
$(document).ready(function() {

	/**
	 * Waypoints Animation
	 *
	 * The Waypoints functionality has been limited to screen widths
	 * of > 992px (md breakpoint) for better UX on mobile.
	 *
	 * Each section has it's own function, so it can be customized.
	 * See offset and addClass.
	 *
	 * Animate.css classes have been added in the addClass function.
	 *
	 * Offsets are added relative to the top of the screen. This is where
	 * the section will scroll into view.
	 *
	 **/
	if($(window).width() > 991){

		// hide all waypoints sections onload by default by applying a class
		$(".waypoint").addClass("opacity-0");

		// section 1
		$("#waypoint-1").waypoint(function() {
			// remove opacity-0 class, add Animate.css class to animate into view
			$("#waypoint-1").removeClass("opacity-0").addClass("fadeInUp");
		}, {offset: "50%"});

		// section 2
		$("#waypoint-2").waypoint(function() {
			// remove opacity-0 class, add Animate.css class to animate into view
			$("#waypoint-2").removeClass("opacity-0").addClass("fadeInRight");
		}, {offset: "50%"});

		// section 3
		$("#waypoint-3").waypoint(function() {
			// remove opacity-0 class, add Animate.css class to animate into view
			$("#waypoint-3").removeClass("opacity-0").addClass("fadeInLeft");
		}, {offset: "50%"});

		// section 4/instructions
		$("#waypoint-4").waypoint(function() {
			// remove opacity-0 class, add Animate.css class to animate into view
			$("#waypoint-4").removeClass("opacity-0").addClass("bounceInUp");
		}, {offset: "50%"});

		// contact
		$("#waypoint-5").waypoint(function() {
			// remove opacity-0 class, add Animate.css class to animate into view
			$("#waypoint-5").removeClass("opacity-0").addClass("fadeInRight");
		}, {offset: "100%"});

	}// end if condition
});// end document.ready()
