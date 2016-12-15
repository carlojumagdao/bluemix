@extends('layouts.maintenance')

@section('title')
	Dashboard
@endsection

@section('body')
  
  <div class="row">
    <div class="col s12 m4 l4">
      <div class="card">
        <div class="card-content green white-text">
          <h5 class="center"><i class="fa fa-money center"></i> Total Donations</h5>
        </div>
        <div class="card-content center green lighten-1 white-text">
          <p>900,000 php</p>
        </div>
      </div>
    </div>
    <div class="col s12 m4 l4">
      <div class="card">
        <div class="card-content red white-text">
          <h5 class="center"><i class="fa fa-user-o center"></i> Total Users</h5>
        </div>
        <div class="card-content center red lighten-1 white-text">
          <p>100,000 users</p>
        </div>
      </div>
    </div>
    <div class="col s12 m4 l4">
      <div class="card">
        <div class="card-content blue white-text">
          <h5 class="center"><i class="fa fa-hand-peace-o center"></i> Total Events</h5>
        </div>
        <div class="card-content center blue lighten-1 white-text">
          <p>100 events</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <h5 class="center">Active Events</h5>
    <div class="col s12 m4 l4">
      <div class="card">
        <div class="card-content">
        <h5>Yolanda Victims</h5>
        <label>Samar, Leyte</label>
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
      </div>
    </div>
    <div class="col s12 m4 l4">
      <div class="card">
        <div class="card-content">
        <h5>Tondo Fire Victims</h5>
        <label>Tondo, Manila</label>
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
      </div>
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
		function move() {
		    var elem = document.getElementById("myBar"); 
		    var width = 10;
		    var id = setInterval(frame, 10);
		    function frame() {
		        if (width >= 100) {
		            clearInterval(id);
		        } else {
		            width++; 
		            elem.style.width = width + '%'; 
		            document.getElementById("label").innerHTML = width * 1 + '%';
		        }
		    }
		}
	</script>

@endsection