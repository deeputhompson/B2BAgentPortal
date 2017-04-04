@extends('master')
@section('title', 'B2B Portal')

@section('navbar')
	
@endsection

@section('content')
	<div class="row">
    	<div class="col-sm-4">
	      	<h3>Location maintenance</h3>	      	
    	</div>
    </div>
@endsection

	@section('info')
   		       		      
   @endsection

   @section('form')
   <form action = "/location" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <div class="form-group row ">
        <label for="company_id" class="col-sm-2 col-form-label">Company Id:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="company_id" id="company_id" placeholder="Enter company id">
        </div> 
        
   
      <div class="form-group row ">
        <label for="company_id" class="col-sm-2 col-form-label">Company Name:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter company name">
        </div>
        <div class="col-sm-1">
            <button class="btn btn-default" type="search" name="submit_button" value="search_company"><i class="glyphicon glyphicon-search"></i></button>
        </div> 
      </div>  
      
      <div class="row" align="right">
        <button type="reset" class="btn btn-primary">Reset</button>
        <button type="submit" class="btn btn-primary" name="submit_button" value="save_company">Save Company</button>
        <button type="submit" class="btn btn-primary">Add Location</button>
        <button type="submit" class="btn btn-primary">Add Named Contact</button> 
      </div>
    </div>
    </form>

    <div class="container">
      <h2>Search Results</h2>
      <p>The companies matching the search criteria</p>            
      <table class="table table-striped">
      <thead>
        <tr>
          <th>Company id</th>
          <th>Company name</th>
          <th>Company contact</th>
          <th>Company address</th>
          <th>Company postcode</th>
        </tr>
      </thead>
      <tbody>
        @if(isset($organisations))
            @foreach($organisations as $organisation)
              <tr>
                <td>{{$organisation->idOrganisations}}</td>
                <td>{{$organisation->OrganisationsName}}</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
              </tr>
            @endforeach
        @else
          <p>No Records Found</p>
        @endif
    </tbody>
  </table>
</div>

@endsection