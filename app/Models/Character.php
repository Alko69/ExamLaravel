<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = "characters";
    protected $fillable = ['name','comic', 'creation_year', 'cartoonist'];
    public $timestamps = false;

    public function cartoonist()
    {
        return $this->belongsTo(Cartoonist::class);
    }
}
