@extends('layouts.maintenance')

@section('title')
	Admin Maintenance
@endsection

@section('body')

	<div class="row">
		<div class="col s6 m4 l3">
			<form class="col s12">
				<div class="row">
					<h5 class="center">Event Information</h5>
					<div class=" col s12">
						<select class="browser-default">
						    <option value="" disabled selected>Select Category</option>
						    <option value="1">Option 1</option>
						    <option value="2">Option 2</option>
						    <option value="3">Option 3</option>
					  	</select>
					</div>
					<div class="input-field col s12">
					  	<input id="eventName" type="text" class="validate">
					  	<label for="eventName">Event Name</label>
					</div>
			        <div class="input-field col s12">
			          <textarea id="textarea1" class="materialize-textarea"></textarea>
			          <label for="textarea1">Event Description</label>
			        </div>
					<div class="input-field col s12">
					  	<input id="location" type="text" class="validate">
					  	<label for="location">Location</label>
					</div>
					<div class="col s12">
						<label>Date Expiration</label><br>
						<label>From</label>
						<input type="date" class="datepicker">
					</div>			
					<div class="col s12">
						<label>To</label>
						<input type="date" class="datepicker">
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

			<h5 class="center">Donation Information</h5>
			<form class="col s12" style="padding-top: 15px;">
				<div class="row">

					<div class="col s12">
					  <input type="number" name="" placeholder="Enter Fund">						
					</div>
					<div class="col s12">
					  <input type="number" name="" placeholder="Enter Conditional Fund">						
					</div>
					<div class="col s12">
					  <input type="number" name="" placeholder="Number of target people">						
					</div>					
				</div>
			</form>
		  	<div class="col s12 center" style="padding-top: 10px;">
		  		<a href="" class="btn"><i class="fa fa-plus left"></i>Add Event</a>
		  	</div>
		</div>
		<div class="col s12 m8 l9">
		    <table class="striped white" style="border-radius:10px;" id="dataTable">
		      <thead>
		        <tr>
		        	<th>Event Name</th>
		        	<th>Event Location</th>
		        	<th>Event Desc</th>
		        	<th>Fund</th>
		        	<th>Conditional Fund</th>
		        	<th>Category</th>
		        	<th>Target People</th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td>Manila Under Fire</td>
		          <td>Metro Manila, Pasay</td>
		          <td>Fire</td>
		          <td>100,000</td>
		          <td>50,000</td>
		          <td>Survival Kit</td>
		          <td>500</td>
		        </tr>
		      </tbody>
		    </table>
		</div>
	</div>


@endsection


@section('scripts')

    <script type="text/javascript">
      $(document).ready(function() {
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
      });
    </script>
    <script type="text/javascript">
    	$(document).ready(function() {
    	$('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 15 // Creates a dropdown of 15 years to control year
		}
	  );
	  });
    </script>	

@endsection