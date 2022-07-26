<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Workshops as W;

class Mechanic extends Model
{
    use HasFactory;

    public function workshop()
    {
        return $this->belongsTo(W::class, 'workshops', 'id');
    }


}
