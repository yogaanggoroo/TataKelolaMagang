<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;

    protected $fillable =   [
        'email',
        'name',
        'division',
        'date',
        'office_hours',
        'description',
    ];

    public function presence()
    {
        return $this->hasMany(Presence::class);
    }
}
