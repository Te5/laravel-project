@extends('layouts.admin')

@section('content')

<h1>Edit a user: {{$user->name}}</h1>
<div>
	<div class="col-sm-3">
		
		<img src="{{$user->photo? $user->photo->path : 'http://placehold.it/400x400' }}" width="200" class="img-responsive img-rounded">
		</div>
				<div class="col-sm-9">	

				<form action="{{action('AdminUsersController@update', $user->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PATCH')
					<div>
						<label>Name</label>
						<input type="text" name="name" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror">

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
					  <select class="form-control @error('role_id') is-invalid @enderror" id="sel1" name="role_id">
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
					  <select class="form-control" id="sel1" name="is_active">
					    	<option value="1">Active</option>
					    	<option value="0">Inactive</option>
					    
					  </select>	  
					</div>	
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

					<div>
						<label for="exampleFormControlFile1">Choose avatar</label>
						<input type="file" class="form-control-file" id="exampleFormControlFile1" name="uploadedFile">
					</div>		
					<br>

					<input type="submit" class="btn btn-primary" value="Update">
				</form>
		</div>
</div>
@endsection()