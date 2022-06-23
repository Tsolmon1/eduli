@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Ангилал</div>
    <div class="panel-body">
        <div class="row text-center">
            <a class="btn btn-default" href="/admin/categories/create">үүсгэх</a>
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
            @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td><a class="btn btn-warning" href="{{ url('/admin/categories/'. $category->id. '/edit', '') }}" role="button">Засах</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop