@extends('layouts.master')

@section('school')
<div class="main-div-white">
    <div style="background:url('{{ $school->banner }}') no-repeat center top;"></div>
    <div class="container">
        <div class="heading">
            <span class="heading-title">{{ $school->name }}</span>
            <div class="heading-line"></div>
            <!-- <img class="flag" src="{{ $flagPath->flag }}" width="30px" alt="{{ $flagPath->name }}"> -->
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <article>
                    <section>
                        <a>Сургуулийн зэрэглэл: {{ $school->rank }}</a>
                        <p>{!! $school->description !!}</p>
                    </section>
                </article>
            </div>
            <div class="col-md-6 col-sm-6">
                {!! $school->media !!}
            </div>
        </div>
    </div>
    <div class="container space">
        {!! $school->file !!}
    </div>
    <div class="container">
        @can('admin-access')
            <div class="edit"><a class="edit-button" href="{{ url('/admin/schools/'. $school->id . '/edit') }}">Edit</a></div>
        @endcan
    </div>
    <div class="space"></div>
</div>
@stop