<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WallFragment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function material() {
        return $this->hasOne(Material::class);
    }
}
