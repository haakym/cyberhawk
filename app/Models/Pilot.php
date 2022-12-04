<?php

namespace App\Models;

use App\Models\Inspection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pilot extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function inspections()
    {
        return $this->hasMany(Inspection::class);
    }
}
