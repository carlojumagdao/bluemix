@extends('layouts.homepage')

@section('title')
	PaLaD homepge
@endsection

@section('body')

	<div class="container">
    	<div class="col s12 m8 l9">
            <div class="row">
                <div class="col s4 grid">
                  <figure class="effect-oscar">
                    <img src="{!! URL::asset('../img/index/gamefinal.png') !!}" style="background-position: center;">
                    <figcaption class="white-text">
                      <h2><span>Play</span></h2>
                      <p>Play games to donate</p>
                    </figcaption>     
                  </figure>
                </div>
                <div class="col s4 grid">
                  <figure class="effect-oscar">
                    <img src="{!! URL::asset('../img/index/learnfinal.png') !!}" style="background-position: center;">
                    <figcaption class="white-text">
                      <h2><span>Learn</span></h2>
                      <p>Learn disaster preparedness</p>
                    </figcaption>     
                  </figure>
                </div>
                <div class="col s4 grid">
                  <figure class="effect-oscar">
                    <img src="{!! URL::asset('../img/index/donatefinal.png') !!}" style="background-position: center;">
                    <figcaption class="white-text">
                      <h2><span>Donate</span></h2>
                      <p>Help and Donate</p>
                    </figcaption>     
                  </figure>
                </div>

                <div class="col s4 push-s2 grid">
                  <figure class="effect-oscar">
                    <img src="{!! URL::asset('../img/index/actfinal.png') !!}" style="background-position: center;">
                    <figcaption class="white-text">
                      <h2><span>Act</span></h2>
                      <p>Share to others</p>
                    </figcaption>     
                  </figure>
                </div>
                <div class="col s4 push-s2 grid">
                  <figure class="effect-oscar">
                    <img src="{!! URL::asset('../img/index/awarefinal.png') !!}" style="background-position: center;">
                    <figcaption class="white-text">
                      <h2><span>Aware</span></h2>
                      <p>Be aware to your surroundings</p>
                    </figcaption>     
                  </figure>
                </div>
            </div>
    	</div>
    </div>

    <div class="row">
      <!-- START OF EVENT -->
    	<div class="col s12 m4 l6">
        <h5 class="black-text center">Recent Event</h5>
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
          	<div class="card-action center">
            	<a id = 'btnPlay' class="btn white-text"><i class="fa fa-gamepad prefix left"></i>Play game to donate</a>
          	</div>
    			</div>
    		</div>
    	</div>
      <!-- END OF EVENT -->
      <!-- START SUGGESTED EVENTS -->
      <div class="col s12 m4 l6">
        <h5 class="center black-text">Suggested Events</h5>
        <div class="row ScrollStyle" style="max-height: 550px; overflow-y: scroll;">
          <div class="col s12">
            <div class="card horizontal">
                <div class="card-image">
                  <img src="img/event/sf.jpg" style="height: 170px;">
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information.</p>
                  </div>
                  <div class="card-action">
                    <a href="#">View more</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="col s12">
            <div class="card horizontal">
                <div class="card-image">
                  <img src="img/event/jugg.jpg" style="height: 170px;">
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information.</p>
                  </div>
                  <div class="card-action">
                      <a href="#">View more</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="col s12">
            <div class="card horizontal">
              <div class="card-image">
                <img src="img/event/sf.jpg" style="height: 170px;">
              </div>
                <div class="card-stacked">
                  <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information.</p>
                  </div>
                  <div class="card-action">
                      <a href="#">View more</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="col s12">
            <div class="card horizontal">
              <div class="card-image">
                <img src="img/event/sf.jpg" style="height: 170px;">
              </div>
                <div class="card-stacked">
                  <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information.</p>
                  </div>
                  <div class="card-action">
                      <a href="#">View more</a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END SUGGESTED EVENTS -->
    </div>

    <!-- HOTLINES -->
    <div class="row red lighten-1">
      <h4 class="center white-text" style="padding-top: 15px;">HOTLINES</h4>
      <div class="col l2">
        <div class="card">
          <div class="card-image">
            <img src="{!! URL::asset('img/donor/pupfinal.png') !!}">
          </div>
          <div class="card-content center">
            <label>PUP</label>
            <p>094515151</p>
          </div>
          <div class="card-action">
            <a href="">View more</a>
          </div>
        </div>
      </div>
      <div class="col l2">
        <div class="card">
          <div class="card-image">
            <img src="{!! URL::asset('img/donor/dost.png') !!}">
          </div>
          <div class="card-content center">
            <label>DOST</label>
            <p>094515151</p>
          </div>
          <div class="card-action">
            <a href="">View more</a>
          </div>
        </div>
      </div>
      <div class="col l2">
        <div class="card">
          <div class="card-image">
            <img src="{!! URL::asset('img/donor/phivolcsfinal.png') !!}">
          </div>
          <div class="card-content center">
            <label>PHIVOLCS</label>
            <p>094515151</p>
          </div>
          <div class="card-action">
            <a href="">View more</a>
          </div>
        </div>
      </div>
      <div class="col l2">
        <div class="card">
          <div class="card-image">
            <img src="{!! URL::asset('img/donor/pnpfinal.png') !!}">
          </div>
          <div class="card-content center">
            <label>PNP</label>
            <p>094515151</p>
          </div>
          <div class="card-action">
            <a href="">View more</a>
          </div>
        </div>
      </div>
      <div class="col l2">
        <div class="card">
          <div class="card-image">
            <img src="{!! URL::asset('img/donor/coastfinal.png') !!}">
          </div>
          <div class="card-content center">
            <label>COAST</label>
            <p>094515151</p>
          </div>
          <div class="card-action">
            <a href="">View more</a>
          </div>
        </div>
      </div>
      <div class="col l2">
        <div class="card">
          <div class="card-image">
            <img src="{!! URL::asset('img/donor/pupfinal.png') !!}">
          </div>
          <div class="card-content center">
            <label>COAST</label>
            <p>094515151</p>
          </div>
          <div class="card-action">
            <a href="">View more</a>
          </div>
        </div>
      </div>
    </div>
    <!-- END OF HOTLINES -->
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
	    $(document).ready(function(){
	    $('.parallax').parallax();
	    });
    </script>
@endsection