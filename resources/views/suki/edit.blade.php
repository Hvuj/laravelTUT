@extends('app')

@section('title', 'Suki')

@section('content')
<h1>Sukis page</h1>
<hr>
<div class="container">
    <h1>Edit Suki</h1>
    <a class="btn btn-primary" href="/sukis/{{$suki->id}}">Cancel</a>
    <a class="btn btn-primary" href="/sukis">Sukis Page</a>
    <hr>
</div>
<hr>
<div class="container">
    <div class="card card-header">
        <form action="/sukis/{{$suki->id}}" method="post">

            @method('PUT')

            <div class="form-group">
                <label for="sukisid">Name</label>
                <input type="text" name="name" class="form-control" id="sukisid" value="{{$suki->name}}">
                <div class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="lastid">Last</label>
                <input type="text" name="last" class="form-control" id="lastid" value="{{$suki->last}}">
                <div class="text-danger">
                    @error('last')
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