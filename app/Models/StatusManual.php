<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusManual extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function manual() {
        return $this->belongsTo(Manual::class);
    }
}