<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;
    protected $table = 'coins';
    protected $primaryKey = 'coin_id';

    public function subVoutchersCost()
    {
        return $this->hasMany(Sub_voutcher::class, 'cost_coin', 'coin_id');
    }

    public function subVoutchersSell()
    {
        return $this->hasMany(Sub_voutcher::class, 'sell_coin', 'coin_id');
    }
    public function journals()
    {
        return $this->hasMany(Journal::class, 'coin', 'coin_id');
    }
}
