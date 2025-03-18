<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\{Factories\HasFactory, Model, SoftDeletes};
use Vinkla\Hashids\Facades\Hashids;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'customer_id',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function getIdAttribute($value): string
    {
        return Hashids::encode($value);
    }

    public function setIdAttribute($value): void
    {
        $this->attributes['id'] = Hashids::decode($value)[0] ?? null;
    }

    public function getCustomerIdAttribute($value): string
    {
        return Hashids::encode($value);
    }

    public function setCustomerIdAttribute($value): void
    {
        $this->attributes['customer_id'] = Hashids::decode($value)[0] ?? null;
    }
}
