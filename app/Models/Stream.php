<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    use HasFactory;
    public $table = 'tbl_streams';
    public $primaryKey = 'stream_id';

    public function district()
    {
        return $this->belongsTo(Entity::class, 'district_id', 'e_id')->withDefault();
    }
}