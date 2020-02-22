@extends('app')

@section('title', 'Laravel')

@section('content')
<div class="container card card-header">
    <div class="row">
        <h1>Create New User</h1>
    </div>
    <hr>
    <div>
        <form action="/laravel" method="post">
            @include('laravel.form')
        </form>
    </div>
</div>
@endsection