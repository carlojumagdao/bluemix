$('document').ready(function(){
	var eventID;

	$('#btnPlay').click(function(){
		$.ajax({
			type: "GET",
			url: "/seteventid?eventID=" + eventID,
			success: function(data){
				window.location.href = '/game';
			},
			error: function(data){
				var toastContent = $('<span>Error Occured. </span>');
				Materialize.toast(toastContent, 1500,'red', 'edit');
			}
		});//ajax
	});

	$('#btnPlay').click(function(){
		$.ajax({
			type: "GET",
			url: "/comments?eventID=" + eventID,
			success: function(data){
				$('#commentSection ul').empty();
				$.each(data, function(index, value){
					$("#commentSection ul").append('<li class="collection-item avatar">' + 
		                '<img src="img/avatar/avatar1.png" alt="" class="circle">' + 
		                '<span>@' + value.strUsername +'</span>' + 
		                '<p>' + value.strComment + '</p>' + 
		            	'</li>');
				});
			},
			error: function(data){
				var toastContent = $('<span>Error Occured. </span>');
				Materialize.toast(toastContent, 1500,'red', 'edit');
			}
		});//ajax
	});

	$('#btnComment').click(function(){
		var strComment = $('#strComment').val();
		var intEventID = this.value;
		$.ajax({
			type: "POST",
			url: "comment/create",
			beforeSend: function (xhr) {
				var token = $('meta[name="csrf_token"]').attr('content');

				if (token) {
					  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
				}
			},
			data: {
				strComment: strComment,
				intEventID: intEventID,
			},
			success: function(data){
				refreshCommentSection();
			},
			error: function(data){
				var toastContent = $('<span>Error Occured. </span>');
				Materialize.toast(toastContent, 1500,'red', 'edit');

			}
		});//ajax
	});

	function refreshCommentSection(){
		$.ajax({
			type: "GET",
			url: "/comments?eventID=" + eventID,
			success: function(data){
				$('#commentSection ul').empty();
				$.each(data, function(index, value){
					$("#commentSection ul").append('<li class="collection-item avatar">' + 
				                '<img src="img/avatar/avatar1.png" alt="" class="circle">' + 
				                '<span>@' + value.strUsername +'</span>' + 
				                '<p>' + value.strComment + '</p>' + 
				                '<p>' + moment(value.TIMESTAMP).calendar() + '</p>' + 
				            '</li>');
				});
			},
			error: function(data){
				var toastContent = $('<span>Error Occured. </span>');
				Materialize.toast(toastContent, 1500,'red', 'edit');
			}
		});//ajax
	}

	$.ajax({
		type: "GET",
		url: "/events",
		success: function(data){
			console.log(data);
			$('#strEventName').text(data.strCategoryName + ' - ' + data.strEventShortDesc);
			$('#strEventDescription').text(data.strEventLongDesc);
			$('#strNote').text('For every person who play the game we will donate P' + data.dblAnswerValue.toFixed(2) + ' to the victims.');
			$('#btnComment').val(data.intEventID);			
			eventID = data.intEventID;

			refreshCommentSection();
		},
		error: function(data){
			var toastContent = $('<span>Error Occured. </span>');
			Materialize.toast(toastContent, 1500,'red', 'edit');
		}
	});//ajax
});