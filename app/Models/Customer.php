<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\{Factories\HasFactory, Model, Relations\HasMany, SoftDeletes};

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }
}
