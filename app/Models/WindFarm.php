<?php

namespace App\Models;

use App\Models\Account;
use App\Models\Turbine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WindFarm extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'latitude', 'longitude', 'account_id'];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function turbines()
    {
        return $this->hasMany(Turbine::class);
    }
}
