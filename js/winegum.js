$(document).ready(function() {
	$("#masthead .nav-menu").each(function() {
		$(this).addClass("nav nav-pills");
		
		$(this).find("> li.page_item_has_children").each(function() {
			$(this).find(" > a").attr("data-toggle", "dropdown");
			$(this).find(".children").addClass("dropdown-menu");
			
			$(this).find(" > a").dropdown();
		});
		
		$(this).fadeIn();
	});
	
	$(this).find(".current_page_item").addClass("active");
});