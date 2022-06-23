@extends('layouts.app')
@section('content')
<div class="page-header">
<h1>Нийтлэлүүд</h1>
</div>
<a class="btn btn-default" href="/admin/articles/create">үүсгэх</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Ангилал</th>
                <th>Зураг</th>
                <th>Гарчиг</th>
                <th>Он сар</th>
                <th>Засвар</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->category_id }}</td>
                <td><img src="{{ url($article->thumbnail) }}" class="flr" alt="{{ $article->thumbnail }}" width="100" height="100"></td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->published_at }}</td>
                <td><a class="btn btn-warning" href="{{ url('admin/articles/'. $article->id. '/edit', '') }}" role="button">Засах</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
<?php echo $articles->render(); ?>
@stop