<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPet extends Model
{
    use HasFactory;
    protected $table='pet';

    public function relUsers()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

}
