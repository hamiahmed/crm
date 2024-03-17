<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dam extends Model
{
    use HasFactory;
    public $table = 'tbl_dams';
    public $primaryKey = 'dam_id';

    public function district()
    {
        return $this->belongsTo(Entity::class, 'district_id', 'e_id')->withDefault();
    }
}