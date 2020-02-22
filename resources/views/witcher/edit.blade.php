@extends('app')

@section('title', 'Witchers')

@section('content')
<h1>Witchers page</h1>
<hr>
<div class="container">
    <h1>Edit Customer</h1>
    <a class="btn btn-primary" href="/witchers/{{$witcher->id}}">Cancel</a>
    <a class="btn btn-primary" href="/witchers">Witchers Page</a>
    <hr>
</div>
<hr>
<div class="container">
    <div class="card card-header">
        <form action="/witchers/{{$witcher->id}}" method="post">

            @method('PUT')

            <div class="form-group">
                <label for="witcherid">Name</label>
                <input type="text" name="name" class="form-control" id="witcherid" value="{{old('name')}}">
                <div class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="wticherstyle">Style</label>
                <input type="text" name="style" class="form-control" id="wticherstyle" value="{{old('style')}}">
                <div class="text-danger">
                    @error('style')
                    {{$message}}
                    @enderror
                </div>
            </div>
            @csrf
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>
<hr>
@endsection