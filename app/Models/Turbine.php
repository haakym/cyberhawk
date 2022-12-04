<?php

namespace App\Models;

use App\Models\WindFarm;
use App\Models\TurbineComponent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Turbine extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'wind_farm_id'];

    public function windFarm()
    {
        return $this->belongsTo(WindFarm::class);
    }

    public function components()
    {
        return $this->hasMany(TurbineComponent::class);
    }
}
