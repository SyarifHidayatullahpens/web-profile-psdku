<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pmb extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'name','date_start', 'date_finish','annoucement','re_registration', 'description'
    ];


}
