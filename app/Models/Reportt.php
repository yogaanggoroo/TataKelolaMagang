<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
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
        return $this->hasMany(Report::class);
    }
}
