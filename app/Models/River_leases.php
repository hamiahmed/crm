<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class River_leases extends Model
{
    use HasFactory;
    public $table = 'tbl_river_leases';
    public $primaryKey = 'river_leases_id ';

    public function river()
    {
        return $this->belongsTo(River::class, 'river_id', 'river_id')->withDefault();
    }
}