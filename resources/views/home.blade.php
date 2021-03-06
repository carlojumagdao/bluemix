@extends('layouts.main')

@section('title')
	Homepage
@endsection


@section('body')
    <div class="row">
    	<div class="col s12 m8 l3">
    		<div class="card">
    			<div class="card-image">
    				<img src="{!! URL::asset('img/avatar/avatar1.png') !!}" class="circle center">
    			</div>
    		</div>
    		<ul class="collection">
    			<li class="collection-item green white-text" id = 'strFullName'><i class="fa fa-user-o prefix left"></i></li>
    			<li class="collection-item" id = 'strEmail'><i class="fa fa-envelope prefix left"></i></li>    			
    			<li class="collection-item red lighten-1 white-text" id = 'dblDonation'><i class="fa fa-money prefix left"></i></li>
    		</ul>
    	</div>

      	<div class="col s12 m8 l5">
	        <div class="row">
    		<h5 class="center">Recent Event</h5>
	          	<div class="col s12">
		            <div class="card">
		              	<div class="card-image">
			                <img src="img/events/phpunit.jpg">
			                <span class="card-title" id = 'strLocation'></span>
		              	</div>
		              	<div class="card-content">
			                <h4 id = 'strEventName'></h5>
			                <p style="font-size:20px;padding-bottom: 5px" id= 'dblConditionalFund'></p>
			                <p id = 'strEventDescription'></p>
			                <blockquote id = 'strNote'></blockquote>

		              	</div>
		              	<div class="card-content">
		              		<label>Target Donation Progress</label>
		              			<div id="myProgress" style="position: relative; width: 100%; height: 30px; background-color: #ddd;">
		              	  			<i class="fa fa-flag prefix right" style="padding-top: 6px; padding-right: 6px;"></i>
						  			<div id="divBar" style="position: absolute; width: 0%; height: 100%; background-color: #4CAF50;">
						    			<div style="text-align: center; line-height: 30px; color: white;" id = 'intBar'></div>
						  			</div>
								</div>
		              	</div>
		              	<div class="card-action green center">
		                	<a id = 'btnPlay' class="btn white-text green lighten-1"><i class="fa fa-gamepad prefix left"></i>Play game to donate</a>
		              	</div>
		              	<div class="card-action row">
		                	<div class="col s4 card-action-share">
				               	<a href="">Like</a>                          
				               	<a href="">Share</a>
		                	</div>
		                
		                	<div class="input-field col s8 margin">
				              	<input id="strComment" type="text" class="validate margin">
				            	<label for="strComment" class="">Comments</label>

				            	<a id = 'btnComment' class="btn white-text">Post Comment</a>
		                	</div>                        
		              	</div> 
		            </div>
		        </div>

	          	<div id = 'commentSection' class="col s12 ScrollStyle" style="max-height: 300px; overflow-y: scroll;">
	            	<ul class="collection">
	            	</ul>
	          	</div>
        	</div>
      	</div>

      	<div class="col s12 m6 l4">
      		<h5 class="center">Suggested Events</h5>
	        <div class="row ScrollStyle" style="max-height: 500px; overflow-y: scroll;">
	          	<div class="col s12">
		            <div class="card">
		              	<div class="card-image">
		                	<img src="{!! URL::asset('../img/calamity/calafire.png') !!}" style="height: 170px;">
		              	</div>
		              	<div class="card-stacked">
			                <div class="card-content">
			                	<h4 id = 'strSuggestedName'></h4>
			                  	<p id = 'strSuggestedDescription'></p>
			                </div>
			                <div class="card-action green center">
			                 	<a id = 'btnSuggestedPlay' class="btn white-text green lighten-1"><i class="fa fa-gamepad prefix left"></i>Play game to donate</a>
			                </div>
		              	</div>
		            </div>
	          	</div>
	          	<div class="col s12">
		            <div class="card">
		              	<div class="card-image">
		                	<img src="{!! URL::asset('../img/calamity/calaquake.png') !!}" style="height: 170px;">
		              	</div>
		              	<div class="card-stacked">
			                <div class="card-content">
			                  	<p>I am a very simple card. I am good at containing small bits of information.</p>
			                </div>
			                <div class="card-action green center">
			                  	<a id = 'btnPlay' class="btn white-text green lighten-1"><i class="fa fa-gamepad prefix left"></i>Play game to donate</a>
			                </div>
		              	</div>
		            </div>
	          	</div>
	          	<div class="col s12">
		            <div class="card">
			            <div class="card-image">
			            	<img src="{!! URL::asset('../img/calamity/calaflood.png') !!}" style="height: 170px;">
			            </div>
		              	<div class="card-stacked">
		                	<div class="card-content">
		                  		<p>I am a very simple card. I am good at containing small bits of information.</p>
		                	</div>
		                	<div class="card-action green center">
		                  		<a id = 'btnPlay' class="btn white-text green lighten-1"><i class="fa fa-gamepad prefix left"></i>Play game to donate</a>
		                	</div>
		              	</div>
		            </div>
	          	</div>
	        </div>
	        <!-- HOTLINES -->
	        <div class="row red lighten-1 ScrollStyle" style="max-height: 500px; overflow-y: scroll;">
	    	<h5 class="center white-text">Hotlines</h5>
	          	<div class="col s12">
		            <div class="card horizontal">
			            <div class="card-image">
			            	<img src="{!! URL::asset('img/donor/pup.png') !!}" style="height: 170px;">
			            </div>
		              	<div class="card-stacked">
		                	<div class="card-content">
		                  		<p>Polytechnic University of the Philippines</p>
		                	</div>
		                	<div class="card-action">
		                  		<a href="https://www.pup.edu.ph">View more</a>
		                	</div>
		              	</div>
		            </div>
	          	</div>
	          	<div class="col s12">
		            <div class="card horizontal">
			            <div class="card-image">
			            	<img src="{!! URL::asset('img/donor/dost.png') !!}" style="height: 170px;">
			            </div>
		              	<div class="card-stacked">
		                	<div class="card-content">
		                  		<p>Department of Science and Technology</p>
		                	</div>
		                	<div class="card-action">
		                  		<a href="http://www.dost.gov.ph/">View more</a>
		                	</div>
		              	</div>
		            </div>
	          	</div>
	          	<div class="col s12">
		            <div class="card horizontal">
			            <div class="card-image">
			            	<img src="{!! URL::asset('img/donor/phivolcsfinal.png') !!}" style="height: 170px;">
			            </div>
		              	<div class="card-stacked">
		                	<div class="card-content">
		                  		<p>Philippine Institute of Volcanology and Seismology</p>
		                	</div>
		                	<div class="card-action">
		                  		<a href="http://www.phivolcs.dost.gov.ph/">View more</a>
		                	</div>
		              	</div>
		            </div>
	          	</div>
	          	<div class="col s12">
		            <div class="card horizontal">
			            <div class="card-image">
			            	<img src="{!! URL::asset('img/donor/pnpfinal.png') !!}" style="height: 170px;">
			            </div>
		              	<div class="card-stacked">
		                	<div class="card-content">
		                  		<p>=Philippine National Police</p>
		                	</div>
		                	<div class="card-action">
		                  		<a href="http://www.pnp.gov.ph/">View more</a>
		                	</div>
		              	</div>
		            </div>
	          	</div>
	          	<div class="col s12">
		            <div class="card horizontal">
			            <div class="card-image">
			            	<img src="{!! URL::asset('img/donor/coastfinal.png') !!}" style="height: 170px;">
			            </div>
		              	<div class="card-stacked">
		                	<div class="card-content">
		                  		<p>Philippine Coast Guard</p>
		                	</div>
		                	<div class="card-action">
		                  		<a href="http://www.coastguard.gov.ph/">View more</a>
		                	</div>
		              	</div>
		            </div>
	          	</div>
	        </div>
	       	<!-- HOTLINES -->
	    </div>
    </div>

@endsection

@section('scripts')
	<script type="text/javascript" src = "{!! URL::asset('../js/process/homeEvent.js') !!}"></script>
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
     	$(document).ready(function(){
      	$('.slider').slider({full_width: true});
    });
    </script>
    <script type="text/javascript">
     	$(document).ready(function(){
        $('.slider').slider({height: 300});
    });
    </script>
@endsection