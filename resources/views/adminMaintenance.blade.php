@extends('layouts.maintenance')

@section('title')
	Admin Maintenance
@endsection

@section('body')

	<div class="row">
		<div class="col s5 m4 l4">
			<form class="col s12">
				<div class="row">
					<div class="input-field col s12">
					  	<input id="eventName" type="text" class="validate">
					  	<label for="eventName">Event Name</label>
					</div>
					<div class=" col s12">
						<select class="browser-default">
						    <option value="" disabled selected>Select Location</option>
						    <option value="1">Option 1</option>
						    <option value="2">Option 2</option>
						    <option value="3">Option 3</option>
					  	</select>
					</div>
					<div class="col s12">
					  <input type="number" name="" placeholder="Enter Fund">						
					</div>
					<div class="col s12">
					  <input type="number" name="" placeholder="Enter Initial Donation">						
					</div>
					<div class=" col s12">
						<select class="browser-default">
						    <option value="" disabled selected>Select Category</option>
						    <option value="1">Option 1</option>
						    <option value="2">Option 2</option>
						    <option value="3">Option 3</option>
					  	</select>
					</div>
					<div class="col s12">
						<input type="range" name="" id="test5" min="100" max="300">
					</div>
					<div class="col s12">
					    <div class="file-field input-field">
					      <div class="btn">
					        <span>File</span>
					        <input type="file">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
					</div>
				</div>
			</form>
		</div>
		<div class="col s7 m8 l8">
	
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
    <script type="text/javascript">
      	$(document).ready(function() {
    	$('select').material_select();
  		});
    </script>

@endsection