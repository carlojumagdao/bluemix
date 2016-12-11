@extends('layouts.maintenance')

@section('title')
	Add Question
@endsection

@section('body')

<br>
<div class="row">
	<div class="col s5 m4 l4">
		<div class="input-field col s12">
			<select id = 'selectCategory'>
				<option disabled selected="selected">Choose Group</option>
			</select>
        </div>
        <div class="input-field col s12">
		    <textarea id="question" class="materialize-textarea"></textarea>
		   	<label for="question">Type Question</label>
		</div>
		<div class="input-field col s12">
		  	<input id="answer" type="text" class="validate">
		  	<label for="answer">Answer</label>
		</div>
	    <div class="file-field input-field col s12">
	      <div class="btn">
	        <span>File</span>
	        <input type="file">
	      </div>
	      <div class="file-path-wrapper">
	        <input class="file-path validate" type="text" placeholder="Upload Image">
	      </div>
	    </div>
	  	<div class="col s12 center" style="padding-top: 10px;">
	  		<a id = 'btnAdd' class="btn"><i class="fa fa-plus left"></i>Add Question</a>
	  	</div>
	</div>
  	<div class="col s7 m8 l8" style="margin-top:">
	    <table class="striped white" style="border-radius:10px;" id="dataTable">
	      <thead>
	        <tr>
	        	<th>Picture</th>
	        	<th>Category Name</th>
	        	<th>Question</th>
	        	<th>Answer</th>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td><img src="{!! URL::asset('img/survival.jpg') !!}" style="height: 50px;"></td>
	          <td>Survival Kit</td>
	          <td>What are you?</td>
	          <td>Human</td>
	        </tr>
	      </tbody>
	    </table>
  	</div>
</div>

@endsection


@section('scripts')
    <script type="text/javascript">
      $('.dropdown-button').dropdown({
          inDuration: 300,
          outDuration: 225,
          constrain_width: false, // Does not change width of dropdown to that of the activator
          hover: true, // Activate on hover
          gutter: 0, // Spacing from edge
          belowOrigin: true, // Displays dropdown below the button
          alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
      );
    </script>
    
	<script type="text/javascript" src = "{!! URL::asset('../js/process/question.js') !!}"></script>
@endsection