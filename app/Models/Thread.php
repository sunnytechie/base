<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $fillable = [
        'base_id',
        'notes',
    ];

    public function base()
    {
        return $this->belongsTo(Base::class);
    }
}
