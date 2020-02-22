@extends('app')

@section('title', 'Laravel/Users')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="/laravel/users">Back</a>
    <hr>
    {{$laravel->name}}
</div>


@endsection