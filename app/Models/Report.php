<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Report extends Model
{
    use HasFactory;

    protected $table = "reports";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','user_id','division','date','reports'
    ];

    protected $dates = ['date'];
    public function setTanggalanAttribute(){
        return Carbon::translateTimeString(date('d M Y'), 'id');
    }

    public function report()
    {
        return $this->hasMany(Report::class);
    }
}
