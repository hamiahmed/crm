<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $table      = 'tbl_services';
    public $primaryKey = 'serv_id';

    public function user()
    {
        return $this->belongsTo(User::class, 'employee_id', 'user_id')->withDefault();
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class, 'designation_id', 'designation_id')->withDefault();
    }
}