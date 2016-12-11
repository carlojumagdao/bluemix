@extends('layouts.maintenance')

@section('title')
	Dashboard
@endsection

@section('body')

    <div class="row">
      <div class="col s12 m6 l7">
        <div class="row">
          <div class="col s12">
            <div class="card">
              <div class="card-image">
                <img src="img/event/Axe.jpg">
                <span class="card-title">Samar, Leyte</span>
              </div>
              <div class="card-content">
                <h5>Yolanda Victim</h5>
                <p>Estimated 100 families had been affected by the massive storm and taken 5 lives along with 1 million worth of properties</p>
                <blockquote>For every person who play the game we will donate < value > to the victims</blockquote>
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
                  <input id="profile-comments" type="text" class="validate margin">
                  <label for="profile-comments" class="">Comments</label>
                </div>                        
              </div> 
            </div>
          </div>
          <div class="col s12 ScrollStyle">
            <ul class="collection">
              <li class="collection-item avatar">
                <img src="img/avatar/avatar1.png" alt="" class="circle">
                <span>@Rafael Desuyo Jr.</span>
                <p>3<i class="fa fa-heart fa-fw red-text"></i><br>
                Wow! Nice
                </p>
                <a href="#!" class="secondary-content"><i class="fa fa-heart fa-fw red-text"></i></a>
              </li>
              <li class="collection-item avatar">
                <img src="img/avatar/avatar2.png" alt="" class="circle">
                <span>@Joseph Javier</span>
                <p>5<i class="fa fa-heart fa-fw red-text"></i><br>
                Brilliant Count me in
                </p>
                <a href="#!" class="secondary-content"><i class="fa fa-heart fa-fw red-text"></i></a>
              </li>
              <li class="collection-item avatar">
                <img src="img/avatar/avatar3.png" alt="" class="circle">
                <span>@Carlo Jumagdao</span>
                <p>10<i class="fa fa-heart fa-fw red-text"></i><br>
                What a huge help! 
                </p>
                <a href="#!" class="secondary-content"><i class="fa fa-heart fa-fw red-text"></i></a>
              </li>
              <li class="collection-item avatar">
                <img src="img/avatar/avatar4.png" alt="" class="circle">
                <span>@Alex Uy</span>
                <p>9<i class="fa fa-heart fa-fw red-text"></i><br>
                Yey! I've passed the test 
                </p>
                <a href="#!" class="secondary-content"><i class="fa fa-heart fa-fw red-text"></i></a>
              </li>
              <li class="collection-item avatar">
                <img src="img/avatar/avatar2.png" alt="" class="circle">
                <span>@Liza Soberano</span>
                <p>9<i class="fa fa-heart fa-fw red-text"></i><br>
                I wanna help too
                </p>
                <a href="#!" class="secondary-content"><i class="fa fa-heart fa-fw red-text"></i></a>
              </li>
            </ul>
            <ul class="pagination center">
              <li class="disabled"><a href="#!"><i class="fa fa-angle-left"></i></a></li>
              <li class="active"><a href="#!">1</a></li>
              <li class="waves-effect"><a href="#!">2</a></li>
              <li class="waves-effect"><a href="#!">3</a></li>
              <li class="waves-effect"><a href="#!">4</a></li>
              <li class="waves-effect"><a href="#!">5</a></li>
              <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

@endsection

@section('scripts')

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