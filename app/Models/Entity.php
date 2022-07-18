<?php

namespace App\Models;

use App\Tweets\Entities\EntityDatabaseCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function newCollection(array $models = []) {
        return new EntityDatabaseCollection($models);
    }
}
