@extends('app')

@section('title', 'Phones')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="/phones">Go Back</a>
</div>
<hr>
<div class="container">
    <table class="table table-hover table-primary">
        <thead>
            <tr>
                <th scope="col">Name:</th>
                <th scope="col">tpye:</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
                <td>{{$phone->name}}</td>
                <td>{{$phone->type}}</td>
            </tr>
        </tbody>
    </table>
    <div>
        <a class="btn btn-warning" href="/phones/{{$phone->id}}/edit">Edit Customer</a>
    </div>
</div>
@endsection