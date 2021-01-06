<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceType extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "service_type";

    protected $fillable = [

        'namekh', 'nameen','price', 'description'

    ];

    public function sector(){

        return $this->belongsTo(Sector::class);

    }

    public function service(){

        return $this->hasMany(Service::class);

    }

}
