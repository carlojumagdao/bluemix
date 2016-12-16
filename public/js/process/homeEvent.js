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
		url: "/users",
		success: function(data){
			$('#strFullName').text(data.strFirstName + ' ' + data.strLastName);
			$('#strEmail').text(data.strEmail);
			$('#dblDonation').text('P ' + (data.dblDonation).formatMoney(2, '.', ','));
			
		},
		error: function(data){
			var toastContent = $('<span>Error Occured. </span>');
			Materialize.toast(toastContent, 1500,'red', 'edit');
		}
	});//ajax

	Number.prototype.formatMoney = function(c, d, t){
	var n = this, 
	    c = isNaN(c = Math.abs(c)) ? 2 : c, 
	    d = d == undefined ? "." : d, 
	    t = t == undefined ? "," : t, 
	    s = n < 0 ? "-" : "", 
	    i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))), 
	    j = (j = i.length) > 3 ? j % 3 : 0;
	   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
	 };

	$.ajax({
		type: "GET",
		url: "/events",
		success: function(data){
			console.log(data);
			var percent = data.progress + '%';
			var conditionalfund = (data.dblConditionalFund).formatMoney(2, '.', ',');
			$('#strEventName').text(data.strEventShortDesc);
			$('#dblConditionalFund').text("Target Donation: P " + conditionalfund);
			$('#strEventDescription').text(data.strEventLongDesc);
			$('#strNote').text('For every person who play the game we will donate P' + (data.dblAnswerValue).formatMoney(2, '.', ',') + ' to the victims.');
			$('#btnComment').val(data.intEventID);		
			$('#strLocation').text(data.strLocation);	
			$('#divBar').css('width', percent);
			$('#intBar').text(percent);

			eventID = data.intEventID;
			refreshCommentSection();
		},
		error: function(data){
			var toastContent = $('<span>Error Occured. </span>');
			Materialize.toast(toastContent, 1500,'red', 'edit');
		}
	});//ajax 
});