$('document').ready(function(){
	$.ajax({
		type: "GET",
		url: "/events",
		success: function(data){
			console.log(data);
			$('#strEventName').text(data.strCategoryName + ' - ' + data.strEventShortDesc);
			$('#strEventDescription').text(data.strEventLongDesc);
			$('#strNote').text('For every person who play the game we will donate P' + data.dblAnswerValue.toFixed(2) + ' to the victims.')
		},
		error: function(data){
			var toastContent = $('<span>Error Occured. </span>');
			Materialize.toast(toastContent, 1500,'red', 'edit');

		}
	});//ajax
});