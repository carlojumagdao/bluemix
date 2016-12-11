$('document').ready(function(){
	$('#btnLogin').click(function(){
		var strUsername = $('#username').val();
		var strPassword = $('#password').val();

		$.ajax({
			type: "POST",
			url: "login/check",
			beforeSend: function (xhr) {
				var token = $('meta[name="csrf_token"]').attr('content');

				if (token) {
					  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
				}
			},
			data: {
				strUsername: strUsername,
				strPassword: strPassword
			},
			success: function(data){
				if (data){
					window.location.href = '/home';
				}else{
					confirm('Failed Login');
				}
				
			},
			error: function(data){
				var toastContent = $('<span>Error Occured. </span>');
				Materialize.toast(toastContent, 1500,'red', 'edit');

			}
		});//ajax
	});
});