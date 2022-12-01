<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable =   [
        'email',
        'name',
        'certificate',
    ];

    public function certificate()
    {
        return $this->hasMany(Certificate::class);
    }
}

