<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $table = 'journals';
    protected $primaryKey = 'journal_id';

    protected $fillable = [
        'acount_dept',
        'acount_cridit',
        'cridit',
        'dept',
        'coin',
        'coin_price',
        'operation_date',
        'memo',
        'voutcher_id',
        'passport_id',
    ];

    //Relations

    public function deptAccount()
    {
        return $this->belongsTo(Account::class, 'acount_dept', 'account_id');
    }

    public function creditAccount()
    {
        return $this->belongsTo(Account::class, 'acount_cridit', 'account_id');
    }

    public function coinRelation()
    {
        return $this->belongsTo(Coin::class, 'coin', 'coin_id');
    }

    public function voutcher()
    {
        return $this->belongsTo(Voutcher::class, 'voutcher_id', 'voutcher_id');
    }

    public function passport()
    {
        return $this->belongsTo(Passport::class, 'passport_id', 'passport_id');
    }
}