<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    public function village(){

        return $this->hasMany(Village::class);

    }

    public function service(){

        return $this->hasMany(Service::class);

    }

    public function customer(){

        return $this->hasMany(Customer::class);

    }

}
