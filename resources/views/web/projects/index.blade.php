@extends('layouts.web.app')

@section('content')

<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url(images/slide_3.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2>Our Awesome Projects</h2>
                            <p class="fh5co-lead">Designed with <i class="icon-heart"></i> by the fine folks at <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div id="fh5co-work-section" class="fh5co-light-grey-section">
    <div class="container">
        <div class="row">

            @foreach($projects as $project)
            {!! Html::projectPanel($project->title, $project->link, $project->image, $project->category) !!}
            @endforeach

        </div>
    </div>
</div>

@endsection