<?php

use OscarWeijman\LaravelExample\Http\Controllers\MyController;

it('has a route', function () {
    $this->get('example')
        ->assertOk()
        ->assertSee('hi from view');
});

it('do the same, has a route', function () {
    $this->get(action([MyController::class, 'index']))
        ->assertOk()
        ->assertSee('ok');
});
