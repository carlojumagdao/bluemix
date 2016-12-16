@extends('layouts.maintenance')

@section('title')
	Add Question
@endsection

@section('body')

<br>
<div class="row">
	@if (Session::has('message'))
        <div>
            <blockquote>{{ Session::get('message') }}</blockquote>
        </div>
    @endif
	<div class="col s5 m4 l4">
		{!! Form::open( array(
            'method' => 'post',
            'files' => 'true', 
            'id' => 'form-add-setting',
            'class' => 'col s12',
            'action' => 'QuestionController@create'
        ) ) !!}
		<div class="card-panel2 tooltipped" data-position="top" data-tooltip="Question Picture">
            <img id="questionpic" src="{{ URL::asset('img/avatar/avatar4.png') }}" width="200px" /> 
        </div>
        <div class="file-field input-field">
            <div class="btn waves-effect waves-black">
                <span>File</span>
                <input name = "strQuestionImage" type="file" onchange="readURL(this);">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate yellow-text text-darken-2" type="text">
            </div>
        </div>
		<div class="input-field col s12">
			<select id = 'selectCategory' name="intCategoryID">
				<option disabled selected="selected">Choose Group</option>
			</select>
        </div>
        <div class="input-field col s12">
		    <textarea id="question" name="strQuestionDesc" class="materialize-textarea"></textarea>
		   	<label for="question">Type Question</label>
		</div>
		<div class="input-field col s12">
		  	<input id="answer" name="strAnswer" type="text" class="validate">
		  	<label for="answer">Answer</label>
		</div>
		<div class="input-field col s12">
		    <textarea id="answerdesc" name="strAnswerDesc" class="materialize-textarea"></textarea>
		   	<label for="answerdesc">Answer Description</label>
		</div>
	  	<div class="col s12 center" style="padding-top: 10px;">
	  		{!! Form::submit( 'Submit', array(
                'id' => 'btn-add-setting',
                'class' => 'btn'
                )) 
            !!}
	  	</div>
		{!! Form::close() !!}
	</div>
	<div class="col s7 m8 l8" style="margin-top:">
		<table class="striped white" style="border-radius:10px;" id="dataTable">
			<thead>
				<tr>
					<th>Category Name</th>
					<th>Question</th>
				</tr>
			</thead>
			<tbody>
				@foreach($questions as $question)
				<tr>
					<td>{{$question->strCategoryName}}</td>
					<td>{{$question->strQuestionDesc}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection


@section('scripts')
	<script type="text/javascript">
		function readURL(input) {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();
	                reader.onload = function (e) {
	                    $('#questionpic')
	                    .attr('src', e.target.result)
	                    .width(200)
	                    .height(200);
	                };
	            reader.readAsDataURL(input.files[0]);
	        }
	    }
	</script>
    <script type="text/javascript">
      $(document).ready(function() {
      $('.dropdown-button').dropdown({
          inDuration: 300,
          outDuration: 225,
          constrain_width: false,
          hover: true, // Activate on hover
          gutter: 0, // Spacing from edge
          belowOrigin: true, // Displays dropdown below the button
          alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
      );
      });
    </script>
    
	<script type="text/javascript" src = "{!! URL::asset('../js/process/question.js') !!}"></script>
	<script type="text/javascript" src = "{!! URL::asset('../js/process/selectCategory.js') !!}"></script>
@endsection