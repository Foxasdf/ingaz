<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_voutcher extends Model
{
    use HasFactory;
    protected $table = 'sub_voutchers';
    protected $primaryKey = 'sub_voutcher_id';

    public function voutcher()
    {
        return $this->belongsTo(Voutcher::class, 'vouchter', 'voutcher_id');
    }

    public function costCoin()
    {
        return $this->belongsTo(Coin::class, 'cost_coin', 'coin_id');
    }

    public function sellCoin()
    {
        return $this->belongsTo(Coin::class, 'sell_coin', 'coin_id');
    }
}
