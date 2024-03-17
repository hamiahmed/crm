<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entity;

class Dam_detail extends Model
{
    use HasFactory;
    public $table = 'tbl_dam_details';
    public $primaryKey = 'dam_detail_id ';

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