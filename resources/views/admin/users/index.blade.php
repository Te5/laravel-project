@extends('layouts.admin')



@section('content')


<h1>Users</h1>

<table class="table table-striped">
    <div id="app">
      
    </div>
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Active</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>

    @if($users)	
    <tbody>
	@foreach ($users as $user)

      <tr>
      	<td>{{$user->id}}</td>
        <td><img src="{{$user->photo? $user->photo->path: 'http://placehold.it/400x400'}}" height="50"  alt=""></td>
        <td><a href="{{action('AdminUsersController@edit', $user->id)}}">{{$user->name}}</a></td>
        <td>{{$user->email}}</td>
        <td>{{$user->roles->name}}</td>
        <td>{{$user->is_active? 'Yes': 'No'}}</td>
        <td>{{$user->created_at->diffForhumans()}}</td>
        <td>{{$user->updated_at->diffForhumans()}}</td>
      </tr>    
	@endforeach      
    </tbody>
  	</table>

<div class="row">
  <div class="col-sm-4 col-sm-offset-5">
    {{$users->render()}}
  </div>
</div>
	@endif
@endsection

