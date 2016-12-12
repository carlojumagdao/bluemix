$('document').ready(function(){
	var questions;
	var intCounter = 0;
	var intScore = 0;

	$.ajax({
		type: "GET",
		url: "/games",
		success: function(data){
			questions = data;
			fncQuestion(intCounter);
		},
		error: function(data){
			var toastContent = $('<span>Error Occured. </span>');
			Materialize.toast(toastContent, 1500,'red', 'edit');
		}
	});//ajax

	function fncQuestion(intNumber){
		var objQuestion = questions[intNumber];
		$('#strQuestion').text(objQuestion.strQuestionDesc);
	}

	$('#btnEnter').click(function(){
		var strAnswer = $('#strAnswer').val();
		if (questions[intCounter].strAnswer == strAnswer){
			$('#strAnswerStatus').text('Correct!');
			intScore ++;
		}else{
			$('#strAnswerStatus').text('Wrong! The correct answer is ' + questions[intCounter].strAnswer);
		}

		intCounter ++;
		if (intCounter == questions.length){
			$('#btnNext').text('Submit');
		}
	});

	$('#btnNext').click(function(){
		$('#strAnswerStatus').text('');
		$('#strAnswer').val('');

		if ($('#btnNext').text() == 'Submit'){
			submitScore();
		}

		if(intCounter < questions.length){
			fncQuestion(intCounter);	
		}
	});


	function submitScore(){
		$.ajax({
			type: "POST",
			url: "score/create",
			beforeSend: function (xhr) {
				var token = $('meta[name="csrf_token"]').attr('content');

				if (token) {
					  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
				}
			},
			data: {
				intScore: intScore
			},
			success: function(data){
				confirm('Your score is ' + intScore + '. Thank you for participating our campaign.');
				window.location.href = '/home';
			},
			error: function(data){
				var toastContent = $('<span>Error Occured. </span>');
				Materialize.toast(toastContent, 1500,'red', 'edit');

			}
		});//ajax
	}
});

















