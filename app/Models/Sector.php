<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sector extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "sectors";

    protected $fillable = [
        'namekh', 'nameen', 'description'
    ];

    public function serviceType(){

        return $this->hasMany(ServiceType::class);

    }

}
