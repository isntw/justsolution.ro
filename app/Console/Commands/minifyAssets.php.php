<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use MatthiasMullie\Minify;

class minifyAssets extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'assets:minify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will minify all the base assets ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $files = ['css' => [
                base_path('public/css/animate.css'),
                base_path('public/css/icomoon.css'),
                base_path('public/css/bootstrap.css'),
                base_path('public/css/flexslider.css'),
                base_path('public/css/owl.carousel.min.css'),
                base_path('public/css/owl.theme.default.min.css'),
                base_path('public/css/style.css'),
            ], 'js' => [
                base_path('public/js/jquery.min.js'),
                base_path('public/js/jquery.easing.1.3.js'),
                base_path('public/js/bootstrap.min.js'),
                base_path('public/js/jquery.waypoints.min.js'),
                base_path('public/js/owl.carousel.min.js'),
                base_path('public/js/jquery.flexslider-min.js'),
                base_path('public/js/main.js'),
        ]];

        $minifier = ['css' => new Minify\CSS(), 'js' => new Minify\JS()];
        foreach ($files as $key => $values) {
            foreach ($values as $lib) {
                if (!file_exists($lib)) {
                    $this->error('File does not exist: ' . $lib);
                }

                $minifier[$key]->add($lib);
            }
        }

        $minifier['css']->minify(public_path("resources/libs/vendors/vendors.min.css"));
        $minifier['js']->minify(public_path("resources/libs/vendors/vendors.min.js"));
    }

}
