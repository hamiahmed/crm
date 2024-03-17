<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class River_licenses extends Model
{
    use HasFactory;
    public $table = 'tbl_river_licenses';
    public $primaryKey = 'river_license_id ';

    public function river()
    {
        return $this->belongsTo(river::class, 'river_id', 'river_id')->withDefault();
    }
}