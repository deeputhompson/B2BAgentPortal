@extends('master')
@section('title', 'B2B Portal')

@section('navbar')
	
@endsection

@section('content')
	<div class="row">
    	<div class="col-sm-4">
	      	<h2>Company maintenance</h2>	      	
    	</div>
    </div>
@endsection

	@section('info')
   		       		      
   @endsection

   @section('form')
   <form action = "/organisation" method = "post">
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
        <button type="submit" class="btn btn-primary" name="submit_button" value="save_company">Save</button>
        </div>
    </div>
    </form>

    <div class="container">
      <h4>Search Results</h4>
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