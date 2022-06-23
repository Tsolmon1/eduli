@extends('layouts.app')
@section('content')
<h4>Фото зураг</h4>
<div class="row text-center">
    <a class="btn btn-default" href="admin/albums/create">үүсгэх</a>
</div>
<br>
@foreach(array_chunk($albums->all(), 3) as $row)
<div class="row">
    @foreach($row as $album)
    <div class="col-md-4">
        <div class="thumbnail" style="min-height: 200px;">
            <img alt="{{ $album->name }}" src="/images/articles/{{ $album->cover_image }}">
            <div class="caption">
                <h4>{{ $album->name }}</h4>
                <p>Created date:  {{ date("d F Y",strtotime($album->created_at)) }} at {{date("g:ha",strtotime($album->created_at)) }}</p>
                <p><a href="{{ url('admin/albums/'. $album->id. '/edit', '') }}" class="btn btn-big btn-default">edit Gallery</a></p>
                <p><a href="{{ url('admin/albums/'. $album->id. '/show', '') }}" class="btn btn-big btn-default">Show Gallery</a></p>

            </div>
        </div>
    </div>
    @endforeach
</div>
<hr />
@endforeach
<?php echo $albums->render(); ?>
<br>
<br>
@stop