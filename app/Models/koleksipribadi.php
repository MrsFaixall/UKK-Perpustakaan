<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koleksipribadi extends Model
{
    use HasFactory;

    protected $fillable = ['KoleksiID', 'UserID', 'BukuID'];
}
