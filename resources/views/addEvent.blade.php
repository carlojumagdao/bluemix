@extends('layouts.maintenance')

@section('title')
	Add Event
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
            'action' => 'EventController@create'
        ) ) !!}
		<div class="card-panel2 tooltipped" data-position="top" data-tooltip="Question Picture">
            <img id="eventpic" src="{{ URL::asset('img/avatar/avatar4.png') }}" width="400px" /> 
        </div>
        <div class="file-field input-field">
            <div class="btn waves-effect waves-black">
                <span>File</span>
                <input name = "strEventImage" type="file" onchange="readURL(this);">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate yellow-text text-darken-2" type="text">
            </div>
        </div>
		<div class="input-field col s12">
			<select id = 'selectCategory' name="intCategoryID">
				@foreach($categories as $category)
				<option value="{{$category->intCategoryID}}">{{$category->strCategoryName}}</option>
				@endforeach
			</select>
        </div>
        <div class="input-field col s12">
		    <textarea id="eventname" name="strEventName" class="materialize-textarea"></textarea>
		   	<label for="eventname">Event Name</label>
		</div>
		<div class="input-field col s12">
		    <textarea id="strEventDesc" name="strEventDesc" class="materialize-textarea"></textarea>
		   	<label for="strEventDesc">Event Description</label>
		</div>
		<div class="input-field col s12">
		  	<input id="location" name="strLocation" type="text" class="validate">
		  	<label for="location">Location</label>
		</div>
		<div class="input-field col s12">
		    <input id="fund" name="dblFund" class="materialize-textarea"></input>
		   	<label for="fund">Initial Fund</label>
		</div>
		<div class="input-field col s12">
		    <input id="conditionalfund" name="dblConditionalFund" class="materialize-textarea"></input>
		   	<label for="conditionalfund">Conditional Fund</label>
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
					<th>Event Name</th>
					<th>Initial Fund</th>
					<th>Conditional Fund</th>
					<th>Category</th>
				</tr>
			</thead>
			<tbody>
				@foreach($events as $event)
				<tr>
					<td>{{$event->strEventShortDesc}}</td>
					<td>P {{number_format($event->dblFund)}}</td>
					<td>{{number_format($event->dblConditionalFund)}}</td>
					<td>{{$event->strCategoryName}}</td>
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
	                    $('#eventpic')
	                    .attr('src', e.target.result)
	                    .width(400)
	                    .height(400);
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
      $('select').material_select();
    </script>
    
	<!-- <script type="text/javascript" src = "{!! URL::asset('../js/process/question.js') !!}"></script> -->
	<!-- <script type="text/javascript" src = "{!! URL::asset('../js/process/selectCategory.js') !!}"></script> -->
@endsection