# max-halleran
a personal website portraying a portfolio about Max Halleran, an up and coming programmer out of Canada. 

## Milestone 1 Feedback
Excellent work here Emily - Your purpose, audience, goal, persona and use case are all thoughtfully crafted and very well outlined. This will provide you with an excellent guide regarding your UI design and content strategy choices in the milestones to follow. Your HTML is also excellent - really nice work here.

I took note when I read the words "tactful simplicity" - I love it already. Sophisticated presentation of relevant information can make or break a site, and I'm looking forward to seeing what design and content ideas you come up with. If it helps, consider bookmarking examples of sites that are attractive and inspire you. This can help your wireframing, UI and content design process.

Your Milestone 1 passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin work on [Milestone 2&alpha;](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/). Go ahead and read the documentation on bootcamp-coders.cnm.edu if you like, and I will be going over [Milestone 2&alpha;](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/) in class on Monday 5/1 as well.

## Milestone 2&alpha; Feedback
Lovely job on the mockups! Your ideas for animated transitions between page sections will require custom JavaScript/jQuery on your part - so be prepared for an additional challenge here, along with the custom graphic work needed to make it look nice. It's good that you'll be keeping content minimal, as this will lighten your development load giving you more room to experiment with the JavaScript and CSS necessary to get this working.

After giving this some thought, I think [Waypoints.js](http://imakewebthings.com/waypoints/) and [Animate.css](https://daneden.github.io/animate.css/) might be two good tools to start with.

[Waypoints.js](http://imakewebthings.com/waypoints/) is a JavaScipt plugin that will allow you to trigger a function when a user scrolls to an element. [Animate.css](https://daneden.github.io/animate.css/) will then give you pre-built CSS classes than can be appended to your content sections (via a Waypoints function call) that will then animate them into view.

Since this functionality is a bit more advanced than what we typically cover in class, I think I will put together a simple demo to help you get started, showing how this can all work together.

My thought is to create all your sections in order on one long page. Each section will then be hidden by default (via CSS). Then once the user scrolls to a certain point (we'll talk about integrating the button later), then a custom JavaScript/Waypoints function will be called animating a section into view.

The button can also be programmed to scroll the user down on each click and spin at the same time. This will also require a custom jQuery function.

 I'll work on a simple demo. In the meantime, here are some materials that may help:
 - http://www.oxygenna.com/tutorials/scroll-animations-using-waypoints-js-animate-css
- http://jsfiddle.net/harconst/4FNFW/
- https://www.youtube.com/watch?v=5hPVpVtgle4

Also, you will want to study [jQuery](https://jquery.com/) in additional depth. There a many good tutorials on Lynda.com and elsewhere that can help.

I'm excited to see where you take this project. Please talk with me throughout your development process, as you will be taking on a more ambitious scope than usual for PWP. I'm happy to help!

Your Milestone 2&alpha; passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin development on your PWP. Build your layout directly inside the `/public_html` directory. You do not need to use the `/documentation` directory any more.

### Edits &amp; Suggestions
- Beware of spaces around your HTML attributes. This can prevent the browser from parsing them properly. For example:
incorrect: `<html lang = "en">`
correct: `<html lang="en">`

## Milestone 2b Feedback
Right now, given what you have I can only count this Miestone at [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Please check in with me daily re: your development progress. I am happy to bump this score up as you complete more work.

## Milestone 3 / Final PWP Evaluation
Wow - this looks amazing! Excellent work on this project - you tackled some ambitious design challenges and implemented them well.

Unfortunately this still needs some work on the mobile view - it's a little wonky and doesn't quite look right. I think making adjustments to the Bootstrap grid might be all you need to get it right.

Unfortunately your contact form isn't working, and I'm getting a 500 error in devtools. Oftentimes this is just a matter of running `composer install` on A2. If that doesn't solve it, check that all your files are uploaded and our directory structure is correct. I also see a bunch of form code in your **form-validate.js** file - this could be causing issues as well and needs to be deleted. If you want some help debugging this, send me a message on Slack.

Overall, very nice work here. Continue to refine your layout for a professional polish on the mobile view, and get the form working. You have front end talent, so keep building! 

Your Milestone 3/Final Delivery for PWP passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

Your overall passing grade across all of your PWP Milestones is [27/40 points (67.5%)](https://bootcamp-coders.cnm.edu/projects/personal/rubric/#sample-score).

- Milestone 1 - 20%: Tier IV 40(0.2) = 8
- Milestone 2a - 20%: Tier IV 40(0.2) = 8
- Milestone 2b - 10%: Tier I 10(0.1) = 1
- Milestone 3 - 50%: Tier  II 20(0.5) = 10

### Edits &amp; Suggestions
- Remove the form code from **form-validate.js**
- You might want to delete the console.log on line 8 in custom.js as well and replace it with a cheeky easter egg message for the console output :D
- refine your grid structure for better mobile layout. Be careful about inserting rows within rows and containers inside containers... this can cause grid grief.
