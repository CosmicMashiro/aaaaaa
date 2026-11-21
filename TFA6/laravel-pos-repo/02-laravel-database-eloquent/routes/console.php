<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('about-pos', function () {
    $this->comment('Laravel POS Foundations: routes, controllers, Blade views, and sample account arrays.');
})->purpose('Show a short description of this exercise project');
