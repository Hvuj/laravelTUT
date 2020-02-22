@extends('app')

@section('title', 'Witchers')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="/witchers">Go Back</a>
</div>
<hr>
<div class="container">
    <table class="table table-hover table-primary">
        <thead>
            <tr>
                <th scope="col">Name:</th>
                <th scope="col">style:</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
                <td>{{$witcher->name}}</td>
                <td>{{$witcher->style}}</td>
            </tr>
        </tbody>
    </table>
    <div class="">
        <div class="row">
            <div class="col">
                <a class="btn btn-warning" href="/witchers/{{$witcher->id}}/edit">Edit Witcher</a>
            </div>
            <div class="col">
                <form action="/witchers/{{$witcher->id}}" method="post">
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