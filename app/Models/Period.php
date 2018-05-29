<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Period extends Model
{
    use SoftDeletes;

    protected $fillable = ['month', 'year'];

    public function scopeOrdered($query)
    {
        return $query->orderBy('year')->orderBy('month');
    }
}
