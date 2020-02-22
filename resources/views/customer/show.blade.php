@extends('app')

@section('title', 'Customers')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="/customers">Go Back</a>
</div>
<hr>
<div class="container">
    <table class="table table-hover table-primary">
        <thead>
            <tr>
                <th scope="col">Name:</th>
                <th scope="col">Email:</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
            </tr>
        </tbody>
    </table>
    <div class="">
        <div class="row">
            <div class="col">
                <a class="btn btn-warning" href="/customers/{{$customer->id}}/edit">Edit Customer</a>
            </div>
            <div class="col">
                <form action="/customers/{{$customer->id}}" method="post">
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection