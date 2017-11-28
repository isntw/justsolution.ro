<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function () {
    return [
        'title' => 'Exceedbuy',
        'description' => '',
        'category' => 'Site de Prezentare',
        'link' => null,
        'image' => 'resources/img/projects/project1.jpg',
    ];
});
