<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entity;

class River_fishes extends Model
{
    use HasFactory;
    public $table = 'tbl_river_fishes';
    public $primaryKey = 'river_fish_id ';

   public function dam()
    {
        return $this->belongsTo(Dam::class, 'dam_id', 'dam_id')->withDefault();
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