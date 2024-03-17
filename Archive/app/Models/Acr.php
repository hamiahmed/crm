<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acr extends Model
{
    use HasFactory;
    public $table = 'tbl_acr';
    public $primaryKey = 'acr_id';

    public function user()
    {
        return $this->belongsTo(User::class, 'employee_id', 'user_id')->withDefault();
    }
}