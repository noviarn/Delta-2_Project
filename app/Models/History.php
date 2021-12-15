<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';
    protected $primaryKey = 'id_history';
    public $timestamps = false;

    protected $fillable = [
        'gejala',
    ];

    public function setGejalaAttribute($value)
    {
        $this->attributes['gejala'] = json_encode($value);
    }

    public function getGejalaAttribute($value)
    {
        return $this->attributes['gejala'] = json_decode($value);
    }

    public function setJenisAttribute($value)
    {
        $this->attributes['jenis'] = json_encode($value);
    }

    public function getJenisAttribute($value)
    {
        return $this->attributes['jenis'] = json_decode($value);
    }

    use HasFactory;
}
