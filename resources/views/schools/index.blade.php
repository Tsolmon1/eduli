@extends('layouts.app')
@section('content')
<div class="page-header">
<h1>Сургуулиуд</h1>
</div>
<a class="btn btn-default" href="/admin/schools/create">үүсгэх</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Улс</th>
                <th>Зураг</th>
                <th>Нэр</th>
                <th>Он сар</th>
                <th>Засвар</th>
            </tr>
        </thead>
        <tbody>
            @foreach($schools as $school)
            <tr>
                <th scope="row">{{ $school->id }}</th>
                <td>{{ $school->country_id }}</td>
                <td><img src="{{ $school->thumbnail }}" class="flr" alt="{{ $school->thumbnail }}" width="100" height="100"></td>
                <td>{!! str_limit($school->name, 55)  !!}</td>
                <td>{{ $school->published_at }}</td>
                <td><a class="btn btn-warning" href="{{ url('admin/schools/'. $school->id. '/edit', '') }}" role="button">Засах</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
<?php echo $schools->render(); ?>
@stop