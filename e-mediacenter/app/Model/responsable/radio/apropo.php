<?php

namespace App\Model\responsable\radio;

use Illuminate\Database\Eloquent\Model;

class apropo extends Model
{
    public function getRouteKeyName()
    {
        return 'titre';
    }
}
