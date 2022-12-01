<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable =   [
        'email',
        'name',
        'division',
        'evaluation_1',
        'evaluation_2',
        'evaluation_3',
        'evaluation_4',
        'evaluation_5',
    ];

    public function evaluation()
    {
        return $this->hasMany(Evaluation::class);
    }
}
