<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecFrame extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded  = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class)->select('id', 'name');
    }
    public function project()
    {
        return $this->belongsTo(Project::class)->select('id', 'name');
    }

    // scope totals
    public function scopeTotals($query)
    {
        return $query->select(
        DB::raw('SUM(case when duct_weight <> 0 then duct_weight end) as total_duct_weight'),
        DB::raw('SUM(case when area <> 0 then area end) as total_area'),
        DB::raw('SUM(case when length <> 0 then length end) as total_length'),
        DB::raw('SUM(case when area_1_inch <> 0 then area_1_inch end) as total_area_1_inch'),
        DB::raw('SUM(case when area_2_inch <> 0 then area_2_inch end) as total_area_2_inch'),
        DB::raw('SUM(case when accoustic_area <> 0 then accoustic_area end) as total_accoustic_area'),
        DB::raw('SUM(case when cladding_area <> 0 then cladding_area end) as total_cladding_area'),
        );
    }
}
