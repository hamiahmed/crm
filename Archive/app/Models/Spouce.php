<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spouce extends Model
{
    use HasFactory;
    public $table      = 'tbl_spouce';
    public $primaryKey = 'spou_id';

    public function user()
    {
        return $this->belongsTo(User::class, 'employee_id', 'user_id')->withDefault();
    }
}