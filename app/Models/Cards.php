<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'deck',
        'front',
        'back',
    ];

    public function deck(){
        return $this->belongsTo(Deck::class);
    }
}
