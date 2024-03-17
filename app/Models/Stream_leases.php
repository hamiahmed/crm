<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stream_leases extends Model
{
    use HasFactory;
    public $table = 'tbl_stream_leases';
    public $primaryKey = 'stream_leases_id ';

    public function stream()
    {
        return $this->belongsTo(Dam::class, 'stream_id', 'stream_id')->withDefault();
    }
}