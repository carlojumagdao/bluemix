@extends('layouts.maintenance')

@section('title')
Category
@endsection

@section('body')

<br>
<div class="row">
	<div class="col s5 m4 l4">
		{!! Form::open( array(
            'method' => 'post',
            'files' => 'true', 
            'id' => 'form-add-setting',
            'class' => 'col s12',
            'action' => 'CategoryController@create'
        ) ) !!}
		<div class="card-panel2 tooltipped" data-position="top" data-tooltip="Question Picture">
            <img id="categorypic" src="{{ URL::asset('img/avatar/avatar4.png') }}" width="200px" /> 
        </div>
        <div class="file-field input-field">
            <div class="btn waves-effect waves-black">
                <span>File</span>
                <input name = "strCategoryImage" type="file" onchange="readURL(this);">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate yellow-text text-darken-2" type="text">
            </div>
        </div>
		<div class="input-field col s12">
          	<input id="categoryName" name="strCategoryName" type="text" class="validate">
          	<label for="categoryName">Category Name</label>
        </div>
        <div class="input-field col s12">
		    <textarea id="categoryDescription" name="strCategoryDesc" class="materialize-textarea"></textarea>
		   	<label for="categoryDescription">Category Description</label>
		</div>
	  	<div class="col s12 center" style="padding-top: 10px;">
	  		{!! Form::submit( 'Submit', array(
                'id' => 'btn-add-setting',
                'class' => 'btn'
                )) 
            !!}
	  	</div>
	</div>
  	<div class="col s7 m8 l8" style="margin-top:">
	    <table class="striped white" style="border-radius:10px;" id="dataTable">
			<thead>
				<tr>
					<th>Category Name</th>
					<th>Category Description</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $category)
				<tr>
					<td>{{$category->strCategoryName}}</td>
					<td>{{$category->strCategoryDesc}}</td>
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
	                    $('#categorypic')
	                    .attr('src', e.target.result)
	                    .width(200)
	                    .height(200);
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
          constrain_width: false, // Does not change width of dropdown to that of the activator
          hover: true, // Activate on hover
          gutter: 0, // Spacing from edge
          belowOrigin: true, // Displays dropdown below the button
          alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
      );
      });
    </script>
    
	<script type="text/javascript" src = "{!! URL::asset('../js/process/category.js') !!}"></script>
@endsection