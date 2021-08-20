<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartoonist extends Model
{
    protected $table = "cartoonists";
    protected $fillable = ['name','birth_year', 'nationality'];
    public $timestamps = false;

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
