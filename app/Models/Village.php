<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    public function commune(){

        return $this->belongsTo(Commune::class);

    }

    public function service(){

        return $this->hasMany(Service::class);

    }

    public function customer(){

        return $this->hasMany(Customer::class);

    }

}
