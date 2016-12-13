$('document').ready(function(){
	$('#btnAdd').click(function(){
		var strEventShortDesc = $('#eventName').val();
		var strEventLongDesc = $('#description').val();
		var strLocation = $('#location').val();
		var intCategoryID = $('#selectCategory option:selected').val();
		var datExpiration = $('#expiration').val();
		var dblFund = $('#fund').val();
		var dblConditionalFund = $('#conditionalFund').val();
		var intCountPerson = $('#countPerson').val();
		var dblAnswerValue = dblConditionalFund / intCountPerson;

		$.ajax({
			type: "POST",
			url: "event/create",
			beforeSend: function (xhr) {
				var token = $('meta[name="csrf_token"]').attr('content');

				if (token) {
					  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
				}
			},
			data: {
				strEventShortDesc: strEventShortDesc,
				strEventLongDesc: strEventLongDesc,
				strLocation: strLocation,
				intCategoryID: intCategoryID,
				datExpiration: datExpiration,
				dblFund: dblFund,
				dblConditionalFund: dblConditionalFund,
				dblAnswerValue: dblAnswerValue
			},
			success: function(data){
				confirm('Sucess! Event Created!');
			},
			error: function(data){
				var toastContent = $('<span>Error Occured. </span>');
				Materialize.toast(toastContent, 1500,'red', 'edit');

			}
		});//ajax

	});
});