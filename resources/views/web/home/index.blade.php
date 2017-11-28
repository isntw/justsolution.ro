@extends('layouts.web.app')

@section('content')
<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url(images/slide_1.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2>Start Your Startup With This Template</h2>
                            <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/slide_2.jpg);">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2>Take Your Business To The Next Level</h2>
                            <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/slide_3.jpg);">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2>We Think Different That Others Can't</h2>
                            <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
@include('web.home.components.services')
@include('web.home.components.projects')
@include('web.home.components.clients_feedback')
@include('web.home.components.recent_from_blog')
@endsection

@push('scripts')
<script type="text/javascript">
    alertify.defaults.glossary.title = 'أليرتفاي جي اس';
    alertify.defaults.glossary.ok = 'موافق';
    alertify.defaults.glossary.cancel = 'إلغاء';
</script>
@endpush