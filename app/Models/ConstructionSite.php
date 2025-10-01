<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstructionSite extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function measures() {
        return $this->hasMany(Measure::class, 'site_id', 'id');
    }
}
