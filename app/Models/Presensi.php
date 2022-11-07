<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $table = "presensi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','user_id','tgl','jam_masuk','jam_keluar','jam_kerja'
    ];


    /*public function user()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }*/


    public function user()
    {
        return $this->belongsTo(User::class);

        //return $this->belongsTo(User::class, 'user_id', 'id');

        /*return $this->belongsTo(User::class)->withDefault(function ($user) {
            $user->name = 'Guest Author';
        });*/

        /* return $this->belongsTo(User::class)->withDefault([
            'name' => 'Guest Author',
        ]); */

        // return $this->belongsTo(User::class)->withDefault();
    }
}
