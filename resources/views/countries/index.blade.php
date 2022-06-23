@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
        <h3>Улсууд</h3>
    </div>
    @foreach(array_chunk($countries->all(), 3) as $row)
        <div class="row">
            @foreach($row as $country)
                <div class="col-md-4">
                    <article>
                        <!-- {!! Html::image($country->banner, $country->name, array('height' => 300)) !!} -->
                        <h4><a href="{{ url('/admin/countries', $country->id) }}">{{ $country->name }}</a></h4>
                        {!! Html::image($country->flag, $country->name, array('height' => 90)) !!}
                        <!-- <span class="date">Хугацаа: {{ $country->created_at }}</span> -->
                    </article>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
@stop