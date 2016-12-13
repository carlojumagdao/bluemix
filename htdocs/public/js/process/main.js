$('document').ready(function(){
	$('#btnLogout').click(function(){
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