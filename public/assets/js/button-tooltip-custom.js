"use strict";
var button_tooltip_custom = {
    init: function() {
		$("button").hover(function() {
        	var buttontooltiptext = $(this).attr("class");
		});
		$("button").tooltip();
		$("a").tooltip();
		$("input").tooltip();		
	}
};
jQuery(document).ready(function() {
    button_tooltip_custom.init()
});