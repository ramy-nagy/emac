<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class User extends Authenticatable  implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function RecDuct()
    {
        return $this->hasMany(RecDuct::class);
    }
    public function RoundDust()
    {
        return $this->hasMany(RoundDust::class);
    }
    public function RecFrame()
    {
        return $this->hasMany(RecFrame::class);
    }
    public function RoundFrame()
    {
        return $this->hasMany(RoundFrame::class);
    }
    public function EndCapRec()
    {
        return $this->hasMany(EndCapRec::class);
    }
    public function EndCapRound()
    {
        return $this->hasMany(EndCapRound::class);
    }
    public function BellMouse()
    {
        return $this->hasMany(BellMouse::class);
    }

    public function FittingRecElbow()
    {
        return $this->hasMany(FittingRecElbow::class);
    }
    public function FittingRecReducer()
    {
        return $this->hasMany(FittingRecReducer::class);
    }
    public function FittingRoundReducer()
    {
        return $this->hasMany(FittingRoundReducer::class);
    }
    public function FittingTransition()
    {
        return $this->hasMany(FittingTransition::class);
    }
    public function projects()
    {
        return $this->hasMany(Project::class)
        ->select('id','user_id','name','description', 'created_at', 'updated_at');
    }
}
