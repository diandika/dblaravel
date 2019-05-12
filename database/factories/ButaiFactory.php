<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Butai;
use Faker\Generator as Faker;

$factory->define(Butai::class, function (Faker $faker) {
    $colors = collect(range(1, 3))->map(function() use ($faker) {
        return $faker->colorName;
    })->toArray();

    return [
        'nama' => $faker->nama,
        'kelas' => $faker->kelas,
        'senjata' => $faker->senjata,
        'favorite' => ['colors' => $colors]
    ];
});


