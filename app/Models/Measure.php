<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function wall_parts() {
        return $this->hasMany(WallFragment::class);
    }

    public function construction_site() {
        return $this->belongsTo(ConstructionSite::class);
    }
}
