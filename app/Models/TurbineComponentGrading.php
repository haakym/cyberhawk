<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurbineComponentGrading extends Model
{
    use HasFactory;

    protected $fillable = ['date_time', 'grade', 'turbine_component_id', 'inspection_id'];
    
    public function turbineComponent()
    {
        return $this->belongsTo(TurbineComponent::class);
    }
    
    public function inspection()
    {
        return $this->belongsTo(Inspection::class);
    }
}
