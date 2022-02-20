<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;
    // protected $fillable = ['name', 'description', 'user_id'];
    protected $guarded = ['id'];

    public function RecDucts()
    {
        return $this->hasMany(RecDuct::class, 'project_id');
    }
    public function RoundDucts()
    {
        return $this->hasMany(RoundDust::class, 'project_id');
    }
}
