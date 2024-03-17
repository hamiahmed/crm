<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Designation;

class Promotion extends Model
{
    use HasFactory;
    public $table = 'tbl_promotions';
    public $primaryKey = 'pro_id';

     /**
     * Get all designations.
     *
     * @return \Illuminate\Support\Collection
     */

    public static function getAllDesignations()
    {
        return DB::table('designations')->get();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'employee_id', 'user_id')->withDefault();
    }
    
    public function fromDesignation()
    {
        return $this->belongsTo(Designation::class, 'from_designation', 'designation_id')->withDefault();
    }

    public function toDesignation()
    {
        return $this->belongsTo(Designation::class, 'to_designation', 'designation_id')->withDefault();
    }
    
}