@extends('app')

@section('title', 'Services')

@section('content')
<a href="/services" class="btn btn-primary">Go Back</a>
<hr>
<h1>
    welcome from services
</h1>
<div class="container card card-header">
    <form action="/services" method="post">
        <div class="form-group">
            <label for="nameid">Service</label>
            <input type="text" name="name" class="form-control" id="nameid">
            <div class="text-danger">
                @error('name')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="namenoob">noob</label>
            <input type="text" name="noob" class="form-control" id="namenoob">
            <div class="text-danger">
                @error('noob')
                {{$message}}
                @enderror
            </div>
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Add Service</button>
    </form>
</div>
@endsection