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
    protected $hidden = [
        "deleted_at",
        //"created_at",
        "updated_at"
    ];
    public function RecDucts()
    {
        return $this->hasMany(RecDuct::class, 'project_id');
    }
    public function RoundDucts()
    {
        return $this->hasMany(RoundDust::class, 'project_id');
    }
    public function RecFrames()
    {
        return $this->hasMany(RecFrame::class, 'project_id');
    }
    public function RoundFrames()
    {
        return $this->hasMany(RoundFrame::class, 'project_id');
    }

    public function EndCapRecs()
    {
        return $this->hasMany(EndCapRec::class, 'project_id');
    }
    public function EndCapRounds()
    {
        return $this->hasMany(EndCapRound::class, 'project_id');
    }
    public function BellMouses()
    {
        return $this->hasMany(BellMouse::class, 'project_id');
    }
    public function FittingRecElbows()
    {
        return $this->hasMany(FittingRecElbow::class, 'project_id');
    }
    public function FittingRecReducers()
    {
        return $this->hasMany(FittingRecReducer::class, 'project_id');
    }
    public function FittingRoundReducers()
    {
        return $this->hasMany(FittingRoundReducer::class, 'project_id');
    }
    public function FittingTransitions()
    {
        return $this->hasMany(FittingTransition::class, 'project_id');
    }
}