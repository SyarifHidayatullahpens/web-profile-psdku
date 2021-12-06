<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = ['major_id','name', 'image'];

    public function major() {
        return this->belongsTo(Major::class, 'major_id', 'id');
    }
}
