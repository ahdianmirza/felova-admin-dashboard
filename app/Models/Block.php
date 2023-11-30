<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tanamans() {
        return $this->hasMany(Tanaman::class)->orderBy('kodeTanaman');
    }
}