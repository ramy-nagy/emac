<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FittingTransition extends Model
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
}
