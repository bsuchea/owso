<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{

    use HasFactory;
    use SoftDeletes;

    public function sector(){

        return $this->belongsTo(Sector::class);

    }

    public function serviceType(){

        return $this->belongsTo(ServiceType::class);

    }

    public function village(){

        return $this->belongsTo(Village::class);

    }

    public function commune(){

        return $this->belongsTo(Commune::class);

    }

    public function customer(){

        return $this->hasOne(Customer::class);

    }

}
