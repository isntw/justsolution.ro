@extends('layouts.web.app')

@section('content')
{!! Html::headers([['title'=>'Urmatorul nivel al afacerii dumneavoastra', 'description' => '','img' => 'images/slide_2.jpg']], 'Incepeti')!!}
<!--
<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url(images/slide_2.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2>Duceti-va afacerea la nivelul urmator</h2>
                            <p><a href="#" class="btn btn-primary btn-lg">Incepeti</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>-->
@include('web.home.components.services')
@include('web.home.components.projects')
@endsection

@push('scripts')

@endpush