@extends('app')

@section('title', 'GAme')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="/games">Go Back</a>
</div>
<hr>
<div class="container">
    <table class="table table-hover table-primary">
        <thead>
            <tr>
                <th scope="col">Name:</th>
                <th scope="col">type:</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
                <td>{{$games->name}}</td>
                <td>{{$games->type}}</td>
            </tr>
        </tbody>
    </table>
    <div class="">
        <div class="row">
            <div class="col">
                <a class="btn btn-warning" href="/games/{{$games->id}}/edit">Edit Game</a>
            </div>
            <div class="col">
                <form action="/games/{{$games->id}}" method="post">
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                @csrf
                </form>
            </div>
        </div>
    </div>
    <div>
    </div>
</div>
@endsection