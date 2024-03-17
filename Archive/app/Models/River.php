<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class River extends Model
{
    use HasFactory;
    public $table = 'tbl_rivers';
    public $primaryKey = 'river_id';

    
    public function district()
    {
        return $this->belongsTo(Entity::class, 'district_id', 'e_id')->withDefault();
    }
}