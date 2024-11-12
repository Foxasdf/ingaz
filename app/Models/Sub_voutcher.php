<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_voutcher extends Model
{
    use HasFactory;
    protected $table = 'sub_voutchers';
    protected $primaryKey = 'sub_voutcher_id';

    protected $fillable = [
        'vouchter',
        'passport',
        'suplyer',
        'cost',
        'cost_coin',
        'custumer',
        'sell',
        'sell_coin',
        'recive_date',
        'send_date',
        'finish_date',
        'status',
        'operatin_type',
    ];

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
    public function passport()
    {
        return $this->belongsTo(Passport::class, 'passport', 'passport_number');
    }
}