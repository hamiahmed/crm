<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dam_licenses extends Model
{
    use HasFactory;
    public $table = 'tbl_dam_licenses';
    public $primaryKey = 'dam_license_id ';

    public function dam()
    {
        return $this->belongsTo(Dam::class, 'dam_id', 'dam_id')->withDefault();
    }
}