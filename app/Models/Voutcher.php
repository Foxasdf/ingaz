<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voutcher extends Model
{
    use HasFactory;
    protected $table = 'voutcher';
    protected $primaryKey = 'voutcher_id';

    protected $fillable = [
        'voutcher_name',
        'voutcher_number1',
        'voutcher_number2',
        'address',
        'voutcher_date',
        'voucher_phone',
        'account',
        'voutcher_type',
    ];
    
    public function voutcherType()
    {
        return $this->belongsTo(Voutcher_type::class, 'voutcher_type', 'type_id');
    }

    public function subVoutchers()
    {
        return $this->hasMany(Sub_voutcher::class, 'vouchter', 'voutcher_id');
    }
    public function journals()
    {
        return $this->hasMany(Journal::class, 'voutcher_id', 'voutcher_id');
    }
}
