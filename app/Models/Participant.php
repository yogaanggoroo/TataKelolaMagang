<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable =   [
        'email',
        'name',
        'gender',
        'division',
        'phone',
        'university',
        'photo',
        'proposal',
        'recommendation_letter',
        'CV',
        'transcripts',
        'status',
    ];

    public function participant()
    {
        return $this->hasMany(Participant::class);
    }
}
