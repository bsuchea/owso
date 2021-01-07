<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mediconesystems\LivewireDatatables\Column;

class District extends Model
{
    use HasFactory;

    public function commune(){

        return $this->hasMany(Commune::class);

    }

    public function customer(){

        return $this->hasMany(Customer::class);

    }
}
