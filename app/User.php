<?php

namespace App;

use App\Mail\BareMail;
use App\Notifications\PasswordResetNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname',
        'firstname',
        'email',
        'password',
        'job_id',
        'age',
        'gender',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordResetNotification($token, new BareMail()));
    }

    /**
     * ユーザーの線量記録を取得
     */
    public function exposures()
    {
        return $this->hasMany('App\Exposure');
    }

    /**
     * ユーザーの職業情報を取得
     */
    public function job()
    {
        return $this->belongsTo('App\Job', 'foreign_key', 'j_id');
    }
}
