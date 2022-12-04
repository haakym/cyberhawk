<?php

namespace App\Models;

use App\Models\Turbine;
use App\Models\TurbineComponentGrading;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TurbineComponent extends Model
{
    use HasFactory;
    
    protected $fillable = ['type', 'turbine_id'];

    public function turbine()
    {
        return $this->belongsTo(Turbine::class);
    }

    public function componentGradings()
    {
        return $this->hasMany(TurbineComponentGrading::class);
    }
}
