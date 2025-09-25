<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function test() {

        $p = Product::where('name', 'like', '%5%')->get();

        return view('dashboard', [
            'products' => $p
        ]);
    }
}
