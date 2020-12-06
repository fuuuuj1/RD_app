<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /**
     * テーブルの主キー
     *
     * @var string
     */
    protected $primaryKey = 'j_id';

    /**
     * 職業情報からユーザー情報を取得
     */
    public function job_users()
    {
        return $this->hasMany('App\User', 'foreign_key', 'job_id');
    }
}
