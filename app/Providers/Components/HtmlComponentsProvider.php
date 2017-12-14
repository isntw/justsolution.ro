<?php

namespace App\Providers\Components;

use Illuminate\Support\ServiceProvider;

class HtmlComponentsProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {

        \Html::macro('projectPanel', function($title, $url = '#', $image, $category) {
            return "  <div class='col-md-4 animate-box'>"
                    . "<a href='$url' class='item-grid text-center'>"
                    . "<div class='image' style='background-image: url($image)'></div>"
                    . "<div class='v-align'>"
                    . "<div class='v-align-middle'>"
                    . "<h3 class='title'>$title</h3>"
                    . "<h5 class='category'>$category</h5>"
                    . "</div>"
                    . "</div>"
                    . "</a>"
                    . "</div>";
        });

        \Html::macro('services', function($title, $icon, $description) {
            return "    <div class='col-md-4 animate-box'>"
                    . "<div class='services'>"
                    . "<i class='$icon'></i>"
                    . "<div class='desc'>"
                    . "<h3>$title</h3>"
                    . "<p>$description</p>"
                    . "</div>"
                    . "</div>"
                    . "</div>";
        });
        \Html::macro('headers', function($headers = null) {

            $li = '';
            foreach ($headers as $header) {
                $li .= '<li style="background-image: url(' . $header['img'] . ');">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2>' . $header['title'] . '</h2>
                            <p><a href="#" class="btn btn-primary btn-lg">Incepeti</a></p>
                        </div>
                    </div>
                </div>
            </li>';
            }

            return '<aside id="fh5co-hero" class="js-fullheight">'
                    . '<div class="flexslider js-fullheight">'
                    . '<ul class="slides">'
                    . $li
                    . '</ul>'
                    . '</div>'
                    . '</aside>';
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
