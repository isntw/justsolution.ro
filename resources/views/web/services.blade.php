@extends('layouts.web.app')

@section('content')
{!! Html::headers([['title'=>'Serviciile noastre', 'description' => 'Servicii oferite de echipa JustSolution','img' => 'images/slide_2.jpg']])!!}


<div id="fh5co-services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                <h2>Our Awesome Features</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
        </div>
        <div class="row">
            {!! Html::services('Dashboard', 'icon-laptop', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.' )!!}
            {!! Html::services('Administration', 'icon-server', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.' )!!}
            {!! Html::services('Make Money', 'icon-money', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.' )!!}
            {!! Html::services('SEO Monitoring', 'icon-tablet', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.' )!!}
            {!! Html::services('Online Marketing', 'icon-line-chart', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.' )!!}
            {!! Html::services('Business Analytics', 'icon-pie-chart', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.' )!!}
        </div>
        <div class="row fh5co-services">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                <h2>Our pleasure to serve you</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
            <div class="col-md-4 text-center item-block animate-box">
                <h3>Strategy</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                <p><a href="#" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
            </div>
            <div class="col-md-4 text-center item-block animate-box">
                <h3>Explore</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                <p><a href="#" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
            </div>
            <div class="col-md-4 text-center item-block animate-box">
                <h3>Expertise</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                <p><a href="#" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
            </div>
        </div>
    </div>
</div>
@endsection