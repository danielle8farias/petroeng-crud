<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPet extends Model
{
    use HasFactory;
    protected $table='pet';
    protected $fillable=['name', 'id_user', 'breed', 'color', 'weight'];

    public function relUsers()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

}
