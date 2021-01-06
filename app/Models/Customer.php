<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "customers";

    public function village(){

        return $this->belongsTo(Village::class);

    }

    public function commune(){

        return $this->belongsTo(Commune::class);

    }

    public function district(){

        return $this->belongsTo(District::class);

    }

    public function province(){

        return $this->belongsTo(Province::class);

    }

    public function serivce(){

        return $this->hasOne(Service::class);

    }


}
