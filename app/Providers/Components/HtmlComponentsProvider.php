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
