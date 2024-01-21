<?php

namespace OscarWeijman\LaravelExample\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 */
class MyModel extends Model
{
    use HasFactory;

    public $table = 'laravel_example_table';

    public $guarded = [];

    public function getUpperCasedName(): string
    {
        return strtoupper($this->name);
    }
}
