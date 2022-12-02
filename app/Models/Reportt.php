<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reportt extends Model
{
    use HasFactory;

    protected $fillable =   [
        'email',
        'name',
        'division',
        'date',
        'logbook',
    ];

    public function report()
    {
        return $this->hasMany(Reportt::class);
    }
}
