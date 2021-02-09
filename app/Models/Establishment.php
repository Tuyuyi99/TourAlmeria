<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    use HasFactory;
    public function photography() {
        return $this->hasMany(Photography::class, 'id_establishment');
    }
}
