@extends('layouts.admin_layout')

@section('stylesheets')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
@endsection
@section('content')

<h3>Create a new listing</h3>
<hr>
<form method="POST" action="{{ route('listings.store') }}" enctype="multipart/form-data">
    @csrf
    @method("POST")
  <div class="form-group">
    <label for="text">Title</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card"></i>
        </div>
      </div> 
      <input id="title" name="title" placeholder="Title of the property" type="text" aria-describedby="textHelpBlock" class="form-control">
    </div> 
    <span id="textHelpBlock" class="form-text text-muted">E.g 3 acre plot in Karen</span>
  </div>
  <div class="form-group">
    <label for="textarea">Description</label> 
    <textarea id="textarea" name="description" cols="40" rows="5" aria-describedby="textareaHelpBlock" class="form-control"></textarea> 
    <span id="textareaHelpBlock" class="form-text text-muted">Breif description of the listing (150 words)</span>
  </div>
  <div class="form-group">
    <label>Type of property</label>
    <select class="custom-select" name="type">
        <option selected value="">Open this select menu</option>
        <option value="Rental">Rental</option>
        <option value="For Sale">For Sale</option>
        <option value="Plots and Land">Plots and Land</option>
        <option value="">Other</option>
    </select>
    <span id="textareaHelpBlock" class="form-text text-muted">Breif description of the listing (150 words)</span>
  </div>
  <div>
  <div class="form-group">
<div class="custom-file">
  <input multiple type="file" name="images[]" class="custom-file-input" id="exampleInputFile">
  <label class="custom-file-label" for="exampleInputFile" data-browse="upload images"><i class="fas fa-image"></i>
  Choose images</label>
    <span id="textareaHelpBlock" class="form-text text-muted">Breif description of the listing (150 words)</span>
</div>
  </div>

<div class="form-group">
      <select id="select" name="fk_property_category_id" class="custom-select" aria-describedby="selectHelpBlock">
        <option selected value="">Select property Category</option>
	@foreach($categories as $category)
			
			<option value="{{$category->property_category_id}}">{{$category->property_category_title}}</option>
	@endforeach
      </select> 
    <span id="textareaHelpBlock" class="form-text text-muted">Breif description of the listing (150 words)</span>
</div>
<div class="form-group">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Bedrooms">
    <span id="textareaHelpBlock" class="form-text text-muted">Breif description of the listing (150 words)</span>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Bathrooms">
    <span id="textareaHelpBlock" class="form-text text-muted">Breif description of the listing (150 words)</span>
    </div>
  </div>
</div>
<div class="form-group">
      <select id="select" name="fk_county_id" class="custom-select" aria-describedby="selectHelpBlock">
        <option selected value="">Select county</option>
	@foreach($counties as $county )
			
			<option value="{{$county->county_id}}">{{$county->county_title}}</option>
	@endforeach
      </select> 
    <span id="textareaHelpBlock" class="form-text text-muted">Breif description of the listing (150 words)</span>
</div>
  <div class="form-group">
    <label for="text1">Location</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-book"></i>
        </div>
      </div> 
      <input id="text1" name="location" placeholder="Physical Address of property" type="text" aria-describedby="text1HelpBlock" class="form-control">
    </div> 
    <span id="text1HelpBlock" class="form-text text-muted">E.g Kibera in Nairobi</span>
  </div> 
  <div class="form-group">
    <label for="text1">Price</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-money"></i>
        </div>
      </div> 
      <input id="text1" name="price" placeholder="Price" type="text" aria-describedby="text1HelpBlock" class="form-control">
    </div> 
    <span id="text1HelpBlock" class="form-text text-muted">E.g Kibera in Nairobi</span>
  </div> 

  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Create</button>
  </div>
</form>
@endsection


@section("js")

<!-- Page level plugins -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
@endsection
