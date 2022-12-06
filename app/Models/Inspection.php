<?php

namespace App\Models;

use App\Models\Pilot;
use App\Models\Turbine;
use App\Models\TurbineComponent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inspection extends Model
{
    use HasFactory;

    protected $fillable = ['date_time', 'turbine_id', 'pilot_id'];

    public function turbine()
    {
        return $this->belongsTo(Turbine::class);
    }

    public function pilot()
    {
        return $this->belongsTo(Pilot::class);
    }

    public function componentGradings()
    {
        return $this->hasMany(TurbineComponentGrading::class);
    }
}
