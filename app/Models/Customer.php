<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\{Factories\HasFactory, Model, Relations\HasMany, SoftDeletes};
use Vinkla\Hashids\Facades\Hashids;

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

    public function getIdAttribute($value): string
    {
        return Hashids::encode($value);
    }

    public function setIdAttribute($value): void
    {
        $this->attributes['id'] = Hashids::decode($value)[0] ?? null;
    }
}
