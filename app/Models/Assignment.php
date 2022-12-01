<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable =   [
        'email',
        'name',
        'division',
        'date',
        'assignment',
    ];

    public function assignment()
    {
        return $this->hasMany(Assignment::class);
    }
}
