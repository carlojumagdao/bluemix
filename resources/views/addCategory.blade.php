@extends('layouts.maintenance')

@section('title')
Category
@endsection

@section('body')

<br>
<div class="row">
	<div class="col s5 m4 l4">
		<div class="input-field col s12">
          	<input id="categoryName" type="text" class="validate">
          	<label for="categoryName">Category Name</label>
        </div>
        <div class="input-field col s12">
		    <textarea id="categoryDescription" class="materialize-textarea"></textarea>
		   	<label for="categoryDescription">Category Description</label>
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
	        	<th>Category Logo</th>
	        	<th>Category Name</th>
	        	<th>Category Decscription</th>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td><img src="{!! URL::asset('img/survival.jpg') !!}" style="height: 50px;"></td>
	          <td>Survival Kit</td>
	          <td>Items used for surviving calamities</td>
	        </tr>
	      </tbody>
	    </table>
  	</div>
</div>

<div class="row">
  <div class="input-field col s12">
    <a class="btn waves-effect waves-light col s12" id = 'btnAdd'>Add</a>
  </div>
</div>

@endsection

@section('scripts')
	<script type="text/javascript" src = "{!! URL::asset('../js/process/category.js') !!}"></script>
@endsection