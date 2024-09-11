<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voutcher_type extends Model
{
    use HasFactory;
    protected $table = 'voutcher_types';
    protected $primaryKey = 'type_id';

    public function voutchers()
    {
        return $this->hasMany(Voutcher::class, 'voutcher_type', 'type_id');
    }
}
