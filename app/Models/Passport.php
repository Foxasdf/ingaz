<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    use HasFactory;
    protected $table = 'passports';
    protected $primaryKey = 'passport_id';
    protected $fillable = [
        'first_name_a',
        'father_name_a',
        'g_father_name_a',
        'last_name_a',
        'first_name_e',
        'father_name_e',
        'g_father_name_e',
        'last_name_e',
        'mother_name',
        'birth_date',
        'birth_place',
        'nationalty',
        'issue_date',
        'issue_end',
        'issue_place',
        'passport_number',
        'photo',
        'sex',
        'national_number',
    ];

    public function journals()
    {
        return $this->hasMany(Journal::class, 'passport_id', 'passport_id');
    }
    public function subVoutchers()
    {
        return $this->hasMany(Sub_voutcher::class, 'passport', 'passport_number');
    }

}
