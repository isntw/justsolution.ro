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
                            <h2>Our Plans</h2>
                            <p class="fh5co-lead">Designed with <i class="icon-heart"></i> by the fine folks at <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>


<div id="fh5co-pricing-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                <h2>Pricing</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
        </div>
        <div class="row">
            <div class="pricing">
                <div class="col-md-3 animate-box">
                    <div class="price-box">
                        <h2 class="pricing-plan">Starter</h2>
                        <div class="price"><sup class="currency">$</sup>9<small>/month</small></div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
                    </div>
                </div>

                <div class="col-md-3 animate-box">
                    <div class="price-box">
                        <h2 class="pricing-plan">Basic</h2>
                        <div class="price"><sup class="currency">$</sup>27<small>/month</small></div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
                    </div>
                </div>

                <div class="col-md-3 animate-box">
                    <div class="price-box popular">
                        <h2 class="pricing-plan pricing-plan-offer">Pro <span>Best Offer</span></h2>
                        <div class="price"><sup class="currency">$</sup>74<small>/month</small></div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
                    </div>
                </div>

                <div class="col-md-3 animate-box">
                    <div class="price-box">
                        <h2 class="pricing-plan">Unlimited</h2>
                        <div class="price"><sup class="currency">$</sup>140<small>/month</small></div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-services-section" class="fh5co-light-grey-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                <h2>Our Awesome Features</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 animate-box">
                <div class="services">
                    <i class="icon-laptop"></i>
                    <div class="desc">
                        <h3>Dashboard</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <i class="icon-server"></i>
                    <div class="desc">
                        <h3>Administration</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <i class="icon-money"></i>
                    <div class="desc">
                        <h3>Make Money</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <i class="icon-tablet"></i>
                    <div class="desc">
                        <h3>SEO Monitoring</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <i class="icon-line-chart"></i>
                    <div class="desc">
                        <h3>Online Marketing</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <i class="icon-pie-chart"></i>
                    <div class="desc">
                        <h3>Business Analytics</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection