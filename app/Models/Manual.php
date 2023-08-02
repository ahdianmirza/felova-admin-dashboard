<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    use HasFactory;

    protected $fillable = ['device', 'pompa', 'sol_1', 'sol_2', 'sol_3', 'sol_4',];
}