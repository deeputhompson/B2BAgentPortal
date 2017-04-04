@extends('master')
@section('title', 'B2B Portal')

@section('navbar')
	
@endsection

@section('content')
	<div class="row">
    	<div class="col-sm-4">
	      	<h2>Location maintenance</h2>	      	
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
      <hr>

      <div class="form-group row ">
        <label for="address_line1" class="col-sm-2 col-form-label">Address Line1:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="address_line1" id="address_line1" placeholder="Enter address line1">
        </div>
        <label for="address_line2" class="col-sm-2 col-form-label">Address Line2:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="address_line2" id="address_line2" placeholder="Enter address line2">
        </div>
      </div>  

       <div class="form-group row ">
        <label for="address_line3" class="col-sm-2 col-form-label">Address Line3:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="address_line3" id="address_line3" placeholder="Enter address line3">
        </div>
        <label for="address_line2" class="col-sm-2 col-form-label">Address Line4:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="address_line4" id="address_line4" placeholder="Enter address line4">
        </div>
      </div>  

      <div class="form-group row ">
        <label for="country" class="col-sm-2 col-form-label">Country:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="country" id="address_line3" placeholder="Enter Country">
        </div>
        <label for="postcode" class="col-sm-2 col-form-label">Postcode:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="postCode" id="postCode" placeholder="Enter Post Code">
        </div>
      </div>
      
      <div class="row" align="right">
        <button type="reset" class="btn btn-primary">Reset</button>
        <button type="submit" class="btn btn-primary">Search</button>
        <button type="submit" class="btn btn-primary" name="submit_button" value="
        save_company">Add</button>
        </div>
    </div>
    </form>

    <div class="container">
      <h4>Search Results</h4>
      <p>The locations attached to the company</p>            
      <table class="table table-striped">
      <thead>
        <tr>
          <th>Location id</th>
          <th>Location name</th>
          <th>Location contact</th>
          <th>Location address</th>
          <th>Location postcode</th>
        </tr>
      </thead>
      <tbody>
            @if(isset($organisations))
              @foreach ($organisations as $organisation)
                <tr>
                  <td>{{$organisation->id}}</td>
                  <td>{{$organisation->organisationName}}</td>
                  <td>john@example.com</td>
                  <td>Fifth Avenue</td>
                  <td>GU1 1DB</td>
                  <td><a href="/location/{{$organisation->id}}">Locations</a></td>
                </tr>  
              @endforeach
              {{$organisations->links()}}
            @endif
      </tbody>
  </table>
</div>

@endsection