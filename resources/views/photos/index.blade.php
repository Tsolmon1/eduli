@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Фото зураг</div>
    <div class="panel-body">
        <div class="row text-center">
            <a class="btn btn-default" href="/admin/photos/create">үүсгэх</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>зураг</th>
                <th>холбоос</th>
                <th>Нэр</th>
                <th>Засвар</th>
            </tr>
        </thead>
        <tbody>
            @foreach($photos as $photo)
            <tr>
                <th scope="row">{{ $photo->id }}</th>
                <td>{!! Html::image('images/articles/'.$photo->path, $photo->name, array('width' => 100)) !!}</td>
                <td>http://edulinellc.mn/images/articles/{{ $photo->path }}</td>
                <td>{{ $photo->name }}</td>
                <td><a class="btn btn-warning" href="{{ url('admin/photos/'. $photo->id. '/edit', '') }}" role="button">Засах</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<?php echo $photos->render(); ?>
@stop