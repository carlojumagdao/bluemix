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
						<select class="browser-default" id = 'selectCategory'>
						    <option value="" disabled selected>Select Category</option>
					  	</select>
					</div>
					<div class="input-field col s12">
					  	<input id="eventName" type="text" class="validate">
					  	<label for="eventName">Event Name</label>
					</div>
			        <div class="input-field col s12">
			          <textarea id="description" class="materialize-textarea"></textarea>
			          <label for="description">Event Description</label>
			        </div>
					<div class="input-field col s12">
					  	<input id="location" type="text" class="validate">
					  	<label for="location">Location</label>
					</div>
					<div class="col s12">
						<label>Date Expiration</label><br>
						<input type="date" id = 'expiration'>
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
					  <input type="number" name="" placeholder="Enter Fund" id = 'fund'>						
					</div>
					<div class="col s12">
					  <input type="number" name="" placeholder="Enter Conditional Fund" id = 'conditionalFund'>						
					</div>
					<div class="col s12">
					  <input type="number" name="" placeholder="Number of target people" id = 'countPerson'>						
					</div>					
				</div>
			</form>
		  	<div class="col s12 center" style="padding-top: 10px;">
		  		<a id = "btnAdd" class="btn"><i class="fa fa-plus left"></i>Add Event</a>
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
	<script type="text/javascript" src = "{!! URL::asset('../js/process/event.js') !!}"></script>
	<script type="text/javascript" src = "{!! URL::asset('../js/process/selectCategory.js') !!}"></script>

@endsection