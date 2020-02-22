@extends('app')

@section('title', 'Sukis')

@section('content')
<h1>Suki page</h1>
<a class="btn btn-primary" href="/sukis">Go Back</a>
<hr>
<div class="container card card-header">
    <form action="/sukis" method="post">
        <div class="form-group">
            <label for="sukisid">Suki name</label>
            <input type="text" name="name" class="form-control" id="customerid" value="{{old('name')}}">
            <div class="text-danger">
                @error('name')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="sukislast">Last</label>
            <input type="text" name="last" class="form-control" id="sukislast" value="{{old('last')}}">
            <div class="text-danger">
                @error('last')
                {{$message}}
                @enderror
            </div>
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<hr>
@endsection