<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entity;

class Leave extends Model
{
    use HasFactory;

    protected $table = 'tbl_leave';
    protected $primaryKey = 'leave_id';

    public function user()
    {
        return $this->belongsTo(User::class, 'employee_id', 'user_id')->withDefault();
    }

    public function dep_leaves()
    {
        return $this->belongsTo(Entity::class, 'dep_leave', 'e_id')->withDefault();
    }

    public function not_dep_leaves()
    {
        return $this->belongsTo(Entity::class, 'not_dep_leave', 'e_id')->withDefault();
    }
}
