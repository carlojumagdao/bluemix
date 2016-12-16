  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!--Import jQuery before materialize.js-->
      <meta name="csrf_token" content="{{ csrf_token() }}" />
      <script type="text/javascript" src="{!! URL::asset('../js/jquery-2.1.1.min.js') !!}"></script>
      <script type="text/javascript" src="{!! URL::asset('../js/materialize.min.js') !!}"></script>
      <script type="text/javascript" src="{!! URL::asset('../js/prism.js') !!}"></script>
      <script type="text/javascript" src="{!! URL::asset('../js/custom-min.js') !!}"></script>
      <script type="text/javascript" src="{!! URL::asset('../js/plugin-min.js') !!}"></script>
      <script type="text/javascript" src="{!! URL::asset('../js/perfect-scrollbar.min.js') !!}"></script>
      <script type="text/javascript" src="{!! URL::asset('../js/jquery.magnific-popup.min.js') !!}"></script>
      <!-- <script type="text/javascript" src = "{!! URL::asset('../js/process/game.js') !!}"></script> -->
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/materialize.min.css') !!}" media="screen,projection">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/prism.css') !!}">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/custom-min.css') !!}">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/plugin-min.css') !!}">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/perfect-scrollbar.css') !!}">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/magnific-popup.css') !!}">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/font-awesome.min.css') !!}">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/hover-min.css') !!}">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/jquery.dataTables.min.css') !!}">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      
    <div class="row center">
      <div class="col s12 m8 l4 push-l4">
        <div class="card">
          <div class="card-image">
            <img src="{!! URL::asset('../img/10.jpg') !!}">
          </div>
          <div class="card-content">
            <p id = 'strQuestion' >Question</p>
          </div>
          <div class="card-action">
            <input id = 'strAnswer' type="text" placeholder="Enter Your Answer">
            <p id = 'strAnswerStatus'></p>
          </div>
          <div class="card-action">
            <button id = 'btnEnter' class = "btn">Enter</button>
            <button id = 'btnNext' class = "btn">Next</button>
          </div>
        </div>
      </div>
    </div>


    <script type="text/javascript">

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
          if (questions[intCounter].strAnswer.toLowerCase() == strAnswer.toLowerCase()){
            $('#strAnswerStatus').text('Correct!');
            intScore ++;
            fncReadAnswerDesc(questions[intCounter].strAnswerDesc, questions[intCounter].intQuestionID);
          }else{
            $('#strAnswerStatus').text('Wrong! The correct answer is ' + questions[intCounter].strAnswer);
          }

          intCounter ++;
          if (intCounter == questions.length){
            $('#btnNext').text('Submit');
          }
          function fncReadAnswerDesc(strAnswerDesc,intQuestionID){
           $.ajax({
            type: "POST",
            url: "games/readanswer",
            beforeSend: function (xhr) {
              var token = $('meta[name="csrf_token"]').attr('content');

              if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
              }
            },
            data: {
              strAnswerDesc: strAnswerDesc, intQuestionID: intQuestionID
            },
            success: function(data){
              var audio = new Audio(data);
              audio.play();
            },
            error: function(data){
              var toastContent = $('<span>Error Occured. </span>');
              Materialize.toast(toastContent, 1500,'red', 'edit');

            }
          });//ajax
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
    </script>


    </body>
  </html>    