<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stream_licenses extends Model
{
    use HasFactory;
    public $table = 'tbl_stream_licenses';
    public $primaryKey = 'stream_license_id ';

    public function dam()
    {
        return $this->belongsTo(Dam::class, 'dam_id', 'dam_id')->withDefault();
    }
}