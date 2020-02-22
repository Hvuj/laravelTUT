@extends('app')

@section('title', 'Witchers')

@section('content')
<h1>Witchers page</h1>
<hr>
<div class="container">
    <a class="btn btn-primary" href="/witchers">Cancel</a>
</div>
<hr>
<div class="container">
    <div class="card card-header">
        <form action="/witchers" method="post">
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
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
<hr>
@endsection