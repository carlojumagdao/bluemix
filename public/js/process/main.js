$('document').ready(function(){
	$('#btnLogout').click(function(){
		window.fbAsyncInit = function() {
	        FB.init({
	        appId      : '796300977177240',
	        cookie     : true,  // enable cookies to allow the server to access 
	                            // the session
	        xfbml      : true,  // parse social plugins on this page
	        version    : 'v2.8' // use graph api version 2.8
	      });
		FB.logout(function(response) {
		  // user is now logged out
		});
		(function(d, s, id) {
	        var js, fjs = d.getElementsByTagName(s)[0];
	        if (d.getElementById(id)) return;
	        js = d.createElement(s); js.id = id;
	        js.src = "//connect.facebook.net/en_US/sdk.js";
	        fjs.parentNode.insertBefore(js, fjs);
	      }(document, 'script', 'facebook-jssdk'));
		};
		$.ajax({
			type: "GET",
			url: "/logout",
			success: function(data){
				window.location.href = '/login';
			},
			error: function(data){
				var toastContent = $('<span>Error Occured. </span>');
				Materialize.toast(toastContent, 1500,'red', 'edit');

			}
		});//ajax
	});
});