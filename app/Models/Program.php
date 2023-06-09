<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'photo', 'description', 'meeting', 'month', 'slug'];

    public function getPicture()
    {
        return '/storage/' . $this->photo;
    }
}
