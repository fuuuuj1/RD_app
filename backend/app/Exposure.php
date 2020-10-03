<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Exposure extends Model
{
    /**
     * 線量のユーザー情報を取得
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    /**
     * テーブルの主キー
     *
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * 線量の測定部位の情報を取得
     */
    public function position()
    {
        return $this->belongsTo('App\Position', 'foreign_key', 'p_id');
    }
}