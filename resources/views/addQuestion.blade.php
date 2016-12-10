@extends('layouts.maintenance')

@section('title')
	Add Question
@endsection

@section('body')

<br>
<div class="row">
	<div class="col s5 m4 l4">
		<div class="input-field col s12">
		  <!-- Dropdown Trigger -->
		  <a class='dropdown-button btn' href='#' data-activates='categoryDropdown'>Choose Category</a>

		  <!-- Dropdown Structure -->
		  <ul id='categoryDropdown' class='dropdown-content'>
		    <li><a href="#!">one</a></li>
		    <li><a href="#!">two</a></li>
		  </ul>
        </div>
        <div class="input-field col s12">
		    <textarea id="textarea1" class="materialize-textarea"></textarea>
		   	<label for="textarea1">Type Question</label>
		</div>
	    <div class="file-field input-field col s12">
	      <div class="btn">
	        <span>File</span>
	        <input type="file">
	      </div>
	      <div class="file-path-wrapper">
	        <input class="file-path validate" type="text" placeholder="Upload Image">
	      </div>
	    </div>
	</div>
  	<div class="col s7 m8 l8" style="margin-top:">
	    <table class="striped white" style="border-radius:10px;" id="dataTable">
	      <thead>
	        <tr>
	        	<th>Picture</th>
	        	<th>Category Name</th>
	        	<th>Question</th>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td><img src="{!! URL::asset('img/survival.jpg') !!}" style="height: 50px;"></td>
	          <td>Survival Kit</td>
	          <td>What are you?</td>
	        </tr>
	      </tbody>
	    </table>
  	</div>
</div>

@endsection