<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'url',
        'description',
    ];

    /**
     * Get the user that owns the repository.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
