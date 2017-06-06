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
		$("#section1").waypoint(function() {
			// remove opacity-0 class, add Animate.css class to animate into view
			$("#section1").removeClass("opacity-0").addClass("fadeInLeft");
		}, {offset: "50%"});

		// section 2
		$("#section2").waypoint(function() {
			// remove opacity-0 class, add Animate.css class to animate into view
			$("#section2").removeClass("opacity-0").addClass("fadeInRight");
		}, {offset: "50%"});

		// section 3
		$("#section3").waypoint(function() {
			// remove opacity-0 class, add Animate.css class to animate into view
			$("#section3").removeClass("opacity-0").addClass("fadeInLeft");
		}, {offset: "50%"});

		// section 4/instructions
		$("#section4").waypoint(function() {
			// remove opacity-0 class, add Animate.css class to animate into view
			$("#section4").removeClass("opacity-0").addClass("bounceInUp");
		}, {offset: "50%"});

		// contact
		$("#section5").waypoint(function() {
			// remove opacity-0 class, add Animate.css class to animate into view
			$("#section5").removeClass("opacity-0").addClass("rubberBand");
		}, {offset: "100%"});


	}// end if condition
});// end document.ready()
