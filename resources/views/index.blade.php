@extends('layouts.homepage')

@section('title')
	PaLaD homepge
@endsection

@section('body')
	<div class="parallax-container">
		<div class="parralax">
			<img src="{!! URL::asset('../img/background1.jpg') !!}">
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
	    $(document).ready(function(){
	    $('.parallax').parallax();
	    });
    </script>
@endsection