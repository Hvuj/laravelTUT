@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-10">
      <a href="/laravel" class="btn btn-primary">Back</a>
    </div>
    <div class="col">
      <a href="/laravel/create" class="btn btn-primary">New User</a>
    </div>
  </div>
  <hr>
  <div>
    <a class="btn btn-success" href="/laravel/users?active=1">Active</a>
    <a class="btn btn-danger" href="/laravel/users?active=0">Not Active</a>
  </div>
  <br>
  <table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Gender</th>
      </tr>
    </thead>
    <tbody>
      @forelse($laravels as $laravel)
      <tr class="table-info">
        <td>
          <a href="/laravel/users/{{$laravel->id}}">{{$laravel->name}}</a>
        </td>
        <td>
          {{$laravel->last}}
        </td>
        <td>
          {{$laravel->email}}
        </td>
        <td>
          <a href="/laravel/{{$laravel->id}}/edit" class="btn btn-warning">Edit</a>
          <form action="/laravel/{{$laravel->id}}" method="post">
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
            @csrf
          </form>
        </td>
        @empty
        <li>No users available</li>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection