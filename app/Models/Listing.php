<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Edition;
use App\Models\User;

class Listing extends Model
{
    protected $fillable = [
        'user_id',
        'edition_id',
        'listing_description',
        'price',
        'condition',
        'shipping_type',
        'image_url',
    ];

    use HasFactory;
    public function edition() {
        return $this->belongsTo(Edition::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}