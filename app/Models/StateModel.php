<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateModel extends Model
{
    use HasFactory;
    protected $table = 'states';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
