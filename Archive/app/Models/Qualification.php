<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Qualification extends Model
{
    use HasFactory;
    public $table = 'tbl_qualifications';
    public $primaryKey = 'qul_id';
 
    public function user()
    {
        return $this->belongsTo(User::class, 'employee_id', 'user_id')->withDefault();
    }
}