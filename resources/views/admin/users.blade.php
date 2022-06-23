@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Users</div>
    <div class="panel-body">
        <div class="row text-center">
            <a class="btn btn-default" href="/register">үүсгэх</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Нэр</th>
                <th>Засвар</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop