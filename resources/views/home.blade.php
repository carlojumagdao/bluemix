@extends('layouts.main')

@section('title')
	Homepage
@endsection


@section('body')
  	<div class="slider">
	    <ul class="slides" style="height: 200px;">
	      <li>
	        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
	        <div class="caption center-align">
	          <h3>PaLaD</h3>
	          <h5 class="light grey-text text-lighten-3">Faith in Humanity restored</h5>
	        </div>
	      </li>
	      <li>
	        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
	        <div class="caption left-align">
	          <h3>PLAY</h3>
	          <h5 class="light grey-text text-lighten-3">play games to donate</h5>
	        </div>
	      </li>
	      <li>
	        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
	        <div class="caption right-align">
	          <h3>Learn</h3>
	          <h5 class="light grey-text text-lighten-3">learn and be aware to disaster awaredness</h5>
	        </div>
	      </li>
	      <li>
	        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
	        <div class="caption center-align">
	          <h3>Donate</h3>
	          <h5 class="light grey-text text-lighten-3">donate and help others even you dont have any money</h5>
	        </div>
	      </li>
	    </ul>
  	</div>


    <div class="row">
    	<div class="col s12 m8 l2">
    			<div class="col s12">
					<div class="card">
					    <div class="card-image">
					      <img class="activator" src="{!! URL::asset('img/donor/pup.png') !!}" style="height: 170px;">
					    </div>
					    <div class="card-content">
					      <span class="card-title activator grey-text text-darken-4">PUP<i class="material-icons right">more_vert</i></span>
					      <p><a href="#">This is a link</a></p>
					    </div>
					    <div class="card-reveal">
					      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					      <p>Here is some more information about this product that is only revealed once clicked on.</p>
					    </div>
					</div>
    			</div>
    			<div class="col s12">
					<div class="card">
					    <div class="card-image">
					      <img class="activator" src="{!! URL::asset('img/donor/dost.png') !!}" style="height: 170px;">
					    </div>
					    <div class="card-content">
					      <span class="card-title activator grey-text text-darken-4">DOST<i class="material-icons right">more_vert</i></span>
					      <p><a href="#">This is a link</a></p>
					    </div>
					    <div class="card-reveal">
					      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					      <p>Here is some more information about this product that is only revealed once clicked on.</p>
					    </div>
					</div>
    			</div>
    	</div>

      	<div class="col s12 m8 l6">
	        <div class="row">
	          	<div class="col s12">
		            <div class="card">
		              	<div class="card-image">
			                <img src="img/event/Axe.jpg">
			                <span class="card-title">Samar, Leyte</span>
		              	</div>
		              	<div class="card-content">
			                <h5 id = 'strEventName'>Yolanda Victim</h5>
			                <p id = 'strEventDescription'>Estimated 100 families had been affected by the massive storm and taken 5 lives along with 1 million worth of properties</p>
			                <blockquote id = 'strNote'></blockquote>
		              	</div>
		              	<div class="card-content">
		              		<label>Conditional Fund Progress</label>
		              			<div id="myProgress" style="position: relative; width: 100%; height: 30px; background-color: #ddd;">
		              	  			<i class="fa fa-flag prefix right" style="padding-top: 6px; padding-right: 6px;"></i>
						  			<div id="myBar" style="position: absolute; width: 10%; height: 100%; background-color: #4CAF50;">
						    			<div id="label" style="text-align: center; line-height: 30px; color: white;">10%</div>
						  			</div>
								</div>
		              	</div>
		              	<div class="card-action">
		                	<a href="#" class="btn white-text"><i class="fa fa-gamepad prefix left"></i>Play game to donate</a>
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

      	<div class="col s12 m8 l2">
      		<div class="row">
		        <div class="col s12">
		          <div class="card blue darken-2">
		            <div class="card-image" style="background: white;">
		              <img src="{!! URL::asset('img/aware/stopcancer.jpg') !!}" style="height: 140px;">
		            </div>
		            <div class="card-content hvr-underline-reveal">
		              <p class="white-text">We provide food, clothes, pillow and other necessary things needed by Flood victims</p>
		            </div>
		            <div class="card-action">
		              <a href="#" class="white-text">Learn More<i class="fa fa-arrow-circle-right left"></i></a>
		            </div>
		          </div>
		        </div>
      		</div>
      	</div>
      	<div class="col s12 m8 l2">
      		<div class="row">
		        <div class="col s12">
		          <div class="card blue darken-2">
		            <div class="card-image">
		              <img src="{!! URL::asset('img/aware/stopaids.png') !!}" style="height: 140px;">
		            </div>
		            <div class="card-content hvr-underline-reveal">
		              <p class="white-text">We provide food, clothes, pillow and other necessary things needed by Flood victims</p>
		            </div>
		            <div class="card-action">
		              <a href="#" class="white-text">Learn More<i class="fa fa-arrow-circle-right left"></i></a>
		            </div>
		          </div>
		        </div>
      		</div>
      	</div>
    </div>

@endsection

@section('scripts')
	<script type="text/javascript" src = "{!! URL::asset('../js/process/homeEvent.js') !!}"></script>
	<script type="text/javascript" src = "{!! URL::asset('../js/process/homeUser.js') !!}"></script>

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