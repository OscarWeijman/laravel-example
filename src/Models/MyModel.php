<?php

namespace OscarWeijman\LaravelExample\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;

    public $table = 'laravel_example_table';

    public $guarded = [];

    public function getUpperCasedName()
    {
        return strtoupper($this->name);
    }
}
