@extends('app')

@section('title', 'Phones')

@section('content')
<h1>Phones page</h1>
<hr>
<div class="container">
    <a class="btn btn-primary" href="/phones">Cancel</a>
</div>
<hr>
<div class="container">
    <div class="card card-header">
        <form action="/phones" method="post">
            <div class="form-group">
                <label for="phoneid">Name</label>
                <input type="text" name="name" class="form-control" id="phoneid" value="{{old('name')}}">
                <div class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="typeid">Type</label>
                <input type="text" name="type" class="form-control" id="typeid" value="{{old('type')}}">
                <div class="text-danger">
                    @error('type')
                    {{$message}}
                    @enderror
                </div>
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
<hr>
@endsection