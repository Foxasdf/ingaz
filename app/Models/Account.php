<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'accounts';
    protected $primaryKey = 'account_id';

    public function journalDepts()
    {
        return $this->hasMany(Journal::class, 'acount_dept', 'account_id');
    }

    public function journalCredits()
    {
        return $this->hasMany(Journal::class, 'acount_cridit', 'account_id');
    }
}
