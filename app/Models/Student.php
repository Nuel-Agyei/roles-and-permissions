<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name','guardian', 'class'];

    public function guardian()
    {
        return $this->belongsToMany(Guardian::class);
    }
}
