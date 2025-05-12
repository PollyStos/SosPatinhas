<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pets extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'pet_name',
        'pet_img',
        'pet_type',
        'pet_breed',
        'owner_id',
        'date_lost',
        'last_view_locale',
        'depoiment',
        'finder_id',
        'date_found',
        'found_locale',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
    public function found()
    {
        return $this->belongsTo(User::class, 'finder_id');
    }
}
