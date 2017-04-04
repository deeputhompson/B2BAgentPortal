@extends('master')
@section('title', 'B2B Portal')

@section('navbar')
	
@endsection

@section('content')
	
@endsection

@section('info')
   		      <!-- <p>This is appended to the master infobar.</p> -->
@endsection

@section('form') 	
  	<h2>Organisation Search</h2>
  	<form>	
    <div class="form-group row ">
      <label for="company_name" class="col-sm-2 col-form-label">Company Name:</label>
	  <div class="col-sm-10">
      <input type="text" class="form-control" id="company_name" placeholder="Enter company name">
	  </div>	 	
	 </div>
    <div class="form-group row">
      <label for="company_id" class="col-sm-2 col-form-label">Company ID:</label>
      <div class="col-sm-10">
	  <input type="text" class="form-control" id="company_id" placeholder="Enter company id">
    </div>
	</div>
	 <div class="form-group row">
      <label for="company_postcode" class="col-sm-2 col-form-label">Company Postcode:</label>
      <div class="col-sm-10">
	  <input type="text" class="form-control" id="company_postcode" placeholder="Enter company postcode">
	</div>	
	</div>
	<div class="form-group row">     
	  <label for="contact_name" class="col-sm-2 col-form-label">Contact Name:</label>
	  <div class="col-sm-5">
		<input type="text" class="form-control" id="contact_firstname" placeholder="Enter first name">
	  </div>
	  <div class="col-sm-5">
		<input type="text" class="form-control" id="contact_secondname" placeholder="Enter second name">
	</div>
	</div>
	 <div class="form-group row">
      <label for="company_id" class="col-sm-2 col-form-label">Company Email:</label>
      <div class="col-sm-10">
	  <input type="email" class="form-control" id="company_id" placeholder="Enter email">
	  </div>
   </div>
	 <div class="form-group row">
      <label for="company_id" class="col-sm-2 col-form-label">Policy Number:</label>
      <div class="col-sm-10">
	  <input type="text" class="form-control" id="company_id" placeholder="Enter policy number">
	</div>	
	</div>
	<div class="form-group row">
      <label for="sel1" class="col-sm-2 col-form-label">Contact status:</label>
		<div class="col-sm-10">
		<select class="form-control" id="sel1">
				<option>Active</option>
				<option>Inactive</option>
      </select>
    </div>
	</div>
	<div class="row" align="right">
		 	<button type="reset" class="btn btn-primary">Reset</button>
			<button type="submit" class="btn btn-primary">Search</button>
	</div>
  </form>
@endsection