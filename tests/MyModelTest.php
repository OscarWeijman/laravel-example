<?php

it('can return the uppercased value of a name', function(){
    $myModel = \OscarWeijman\LaravelExample\Models\MyModel::factory()->create(['name' => 'JOHN']);

    expect($myModel->getUpperCasedName())->toEqual('JOHN');
});
