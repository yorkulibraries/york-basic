/** USAGE 




<ul class="jq_simple_tabs">
    <li><a href="#tab1">Gallery</a></li>
    <li><a href="#tab2">Submit</a></li>
</ul>

<div class="jq_simple_tab_container">
    <div id="tab1" class="jq_simple_tab_content">
        <!--Content-->
    </div>
    <div id="tab2" class="jq_simple_tab_content">
       <!--Content-->
    </div>
</div>


-> jq_simple_tabs to ul

-> jq_simple_container to container div

-> jq_simple_tab_content to each content div

*/

$(document).ready(function() {

	//When page loads...
	$(".jq_simple_tab_content").hide(); //Hide all content
	$("ul.jq_simple_tabs li:first").addClass("active").show(); //Activate first tab
	$(".jq_simple_tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.jq_simple_tabs li").click(function() {

		$("ul.jq_simple_tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".jq_simple_tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});