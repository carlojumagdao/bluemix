$(document).ready(function(){
	$('#btnRegister').click(function(){
		var strFirstName = $('#firstname').val();
		var strLastName = $('#lastname').val();
		var strUsername = $('#username').val();
		var strPassword = $('#password').val();
		var strEmail = $('#email').val();
		var blSex = $('input[name=gender]:checked').val();

		$.ajax({
			type: "POST",
			url: "registration/create",
			beforeSend: function (xhr) {
				var token = $('meta[name="csrf_token"]').attr('content');

				if (token) {
					  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
				}
			},
			data: {
				strFirstName: strFirstName,
				strLastName: strLastName,
				strUsername: strUsername,
				strPassword: strPassword,
				strEmail: strEmail,
				blSex: blSex,
			},
			success: function(data){
				confirm('Sucess! Account Created!');
			},
			error: function(data){
				var toastContent = $('<span>Error Occured. </span>');
				Materialize.toast(toastContent, 1500,'red', 'edit');

			}
		});//ajax
	});
});