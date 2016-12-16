$('document').ready(function(){
	
	$('#btnAdd').click(function(){
		var intCategoryID = $('#selectCategory option:selected').val();
		var strQuestionDesc = $('#question').val();
		var strAnswer = $('#answer').val();
		var strAnswerDesc = $('#answerdesc').val();
		var strQuestionImage = $('#questionimage').val();
		strAnswerDesc = encodeURIComponent(strAnswerDesc.trim())

		$.ajax({
			type: "POST",
			url: "question/create",
			beforeSend: function (xhr) {
				var token = $('meta[name="csrf_token"]').attr('content');

				if (token) {
					  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
				}
			},
			data: {
				strQuestionDesc: strQuestionDesc,
				strAnswer: strAnswer,
				intCategoryID: intCategoryID,
				strAnswerDesc: strAnswerDesc,
				strQuestionImage: strQuestionImage
			},
			success: function(data){
				confirm('Sucess! Question Created!');
			},
			error: function(data){
				var toastContent = $('<span>Error Occured. </span>');
				Materialize.toast(toastContent, 1500,'red', 'edit');

			}
		});//ajax
	});
});