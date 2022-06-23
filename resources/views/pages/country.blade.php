@extends('layouts.master')

@section('welcome')
    <div class="container">
        <div class="page-header">
            <img src="{{url('/img/country/header.png')}}">
        </div>
        <div class="row bg-warning">
            <div class="col-md-6">
                <h2>INHA university</h2>
                <ul class="list-unstyled">
                    <li class="master_class__meta"><strong>Price:</strong> $699</li>
                    <li class=""><a href="https://eng.inha.ac.kr/">Вэб сайт: eng.inha.ac.kr</a></li>
                    <li class="master_class__meta">Materials: STAEDTLER pigment liner, Tria markers, warm grays Sharpie Water-Based Paint Marker Fine, or white gel pen Toned paper, heavy weight. Scanner or Camera to scan/photograph homework assignments, Sketch Book (11x8)</span></li>
                </ul>
                <div class="content master_class_intro">
                    <p class="master_class__meta">Course Description:</p>
                    <p>Dynamic Sketching 1 is a class designed to develop a foundation in basic drawing skills. Students will learn how to break down objects to their most simplistic forms. Using pen and toned paper, students will learn to build confidence in your line work.</p>
                </div>
                <p class="program__link" data-show="courses_1">
                    <a href="#" class="btn btn-green btn-box_color btn-arrow">Course Outline</a>
                </p>
            </div>
            <div class="col-md-6">
                <div class="page-header">
                    <iframe width="440" height="248" src="//www.youtube.com/embed/z8JoRkBczUM" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
@stop