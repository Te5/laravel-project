@extends('layouts.admin')

@section('content')

<h1>Create a user</h1>
<div>
	

	<form action="{{action('AdminUsersController@store')}}" method="POST">
		@csrf
		<div>
			<label>Name</label>
			<input type="text" name="name" class="form-control @error('name') is-invalid @enderror">

			@error('name')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror						
		</div>

		<br>


		<div>
			<label>Email</label>
			<input type="text" name="email" class="form-control @error('email') is-invalid @enderror">

	        @error('email')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror
				
		</div>
		<br>
		<div class="form-group">
		  <label for="sel1">Role</label>
		  <select class="form-control @error('role') is-invalid @enderror" id="sel1" name="role">
		  	@foreach($roles as $role)
		    	<option value="{{$role->id}}">{{$role->name}}</option>
		    @endforeach
		  </select>
	        @error('role')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror		  
		</div>	
		<br>

		<div class="form-group">
		  <label for="sel1">Status</label>
		  <select class="form-control" id="sel1" name="active">
		    	<option value="1">Active</option>
		    	<option value="0">Inactive</option>
		    
		  </select>	  
		</div>	
		<br>
		<div>
			
		<label>Password</label>
		<input type="password" name="password" class="form-control @error('password') is-invalid @enderror">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror			
		<br>
		</div>
		<input type="submit" class="btn btn-primary" value="Create">
	</form>
</div>
@endsection()