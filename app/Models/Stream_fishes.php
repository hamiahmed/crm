<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entity;

class Stream_fishes extends Model
{
    use HasFactory;
    public $table = 'tbl_stream_fishes';
    public $primaryKey = 'stream_detail_id ';

   public function stream()
    {
        return $this->belongsTo(Stream::class, 'stream_id', 'stream_id')->withDefault();
    }

    public function type_fish()
    {
        return $this->belongsTo(Entity::class,'fish_type', 'e_id')->withDefault();
    }

    public function type_gear()
    {
        return $this->belongsTo(Entity::class, 'gear_type', 'e_id')->withDefault();
    }
}