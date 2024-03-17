<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dam_leases extends Model
{
    use HasFactory;
    public $table = 'tbl_dam_leases';
    public $primaryKey = 'dam_leases_id ';

    public function dam()
    {
        return $this->belongsTo(Dam::class, 'dam_id', 'dam_id')->withDefault();
    }
}