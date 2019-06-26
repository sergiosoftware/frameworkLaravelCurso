<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = 'productos';
    public function getRouteKeyName() {
        return 'url';
    }
}
