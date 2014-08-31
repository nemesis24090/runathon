$(function() {

	//highlight the current nav
	$("#homepage a:contains('Home')").parent().addClass('active');
    $(".user_login").hide();
    $(".user_register").hide();
    $(".login_screen").show();

    //Put Body ID in place of navHeaderCollapse to make its respective nav active
	/*$("#navHeaderCollapse a:contains('Events')").parent().addClass('active');
	$("#navHeaderCollapse a:contains('Columns')").parent().addClass('active');
   $("#navHeaderCollapse a:contains('Contact Us')").parent().addClass('active');
	
	if($("#navHeaderCollapse a:contains(' Profile')").parent().hasClass('active')){
	$(".dropdown a:contains('My Account')").parent().addClass('active');
	}
	
	if($("#joomla a:contains('Joomla Training')").parent().hasClass('active')){
	$(".dropdown a:contains('Our Programs')").parent().addClass('active');
	}*/

    // Calling Login Form
    $("#login_form").click(function(){
        $(".login_screen").hide();
        $(".user_login").show();
        $(".modal-title").text('LOGIN');
        return false;
    });


    // Calling Register Form
    $("#register_form").click(function(){
        $(".login_screen").hide();
        $(".user_login").hide();
        $(".user_register").show();
        $(".modal-title").text('REGISTER');
        return false;
    });

    // Going back to Social Forms
    $("#backConnect").click(function(){
        $(".user_login").hide();
        $(".user_register").hide();
        $(".login_screen").show();
        $(".modal-title").text('CONNECT WITH US');
        return false;
    });

	//make menus drop automatically
	/*$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	});//hover
	*/
}); //jQuery is loaded