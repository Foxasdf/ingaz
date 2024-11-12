<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'accounts';
    protected $primaryKey = 'account_id';

    protected $fillable = [
        'account_name',
        'trading',
        'visa_company',
        'hotel_company',
        'airline_company',
        'transport_company',
        'ship_company',
        'insurance_company',
        'customer',
        'employee',
        'box',
        'woner',
        'persantage',
    ];

    protected $casts = [
        'trading' => 'boolean',
        'visa_company' => 'boolean',
        'hotel_company' => 'boolean',
        'airline_company' => 'boolean',
        'transport_company' => 'boolean',
        'ship_company' => 'boolean',
        'insurance_company' => 'boolean',
        'customer' => 'boolean',
        'employee' => 'boolean',
        'box' => 'boolean',
        'woner' => 'boolean',
    ];

    public function journalDepts()
    {
        return $this->hasMany(Journal::class, 'acount_dept', 'account_id');
    }

    public function journalCredits()
    {
        return $this->hasMany(Journal::class, 'acount_cridit', 'account_id');
    }
}
