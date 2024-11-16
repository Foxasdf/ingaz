<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;
    
    protected $table = 'coins';
    protected $primaryKey = 'coin_id';

    protected $fillable = ['coin_price','coin_name']; // Add this line to allow mass assignment for 'price'

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
    public function hasRelations()
    {
        return $this->subVoutchersCost()->exists() || $this->subVoutchersSell()->exists() || $this->journals()->exists();
    }
}