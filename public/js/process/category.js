$('document').ready(function(){
	$('#btnAdd').click(function(){
		name = $('#categoryName').val();
		description = $("textarea#categoryDescription").val();

		$.ajax({
			type: "POST",
			url: "category/create",
			beforeSend: function (xhr) {
				var token = $('meta[name="csrf_token"]').attr('content');

				if (token) {
					  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
				}
			},
			data: {
				strCategoryName: name,
				strCategoryDesc: description,
			},
			success: function(data){
				confirm('Sucess! Category Created!');
			},
			error: function(data){
				var toastContent = $('<span>Error Occured. </span>');
				Materialize.toast(toastContent, 1500,'red', 'edit');

			}
		});//ajax
	});
});