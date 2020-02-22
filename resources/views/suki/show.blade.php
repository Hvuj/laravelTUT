@extends('app')

@section('title', 'Sukis')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="/sukis">Go Back</a>
</div>
<hr>
<div class="container">
    <table class="table table-hover table-primary">
        <thead>
            <tr>
                <th scope="col">Name:</th>
                <th scope="col">Last:</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
                <td>{{$suki->name}}</td>
                <td>{{$suki->last}}</td>
            </tr>
        </tbody>
    </table>
    <div>
        <a class="btn btn-warning" href="/sukis/{{$suki->id}}/edit">Edit Suki</a>
    </div>
    <div>
        <form action="/sukis/{{$suki->id}}" method="post">
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
            @csrf
        </form>
    </div>
</div>
@endsection