<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    /**
     * テーブルの主キー
     *
     * @var string
     */
    protected $primaryKey = 'p_id';

    /**
     * 着用部位から線量情報を取得
     */
    public function position_exposures()
    {
        return $this->hasMany('App\Exposure', 'foreign_key', 'position_id');
    }
}
