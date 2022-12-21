<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $table = "certificates";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','user_id','ttl','division','tgl_mulai','tgl_akhir'
    ];

    public function certificate()
    {
        return $this->hasMany(Certificate::class);
    }
}
