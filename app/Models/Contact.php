<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\{Factories\HasFactory, Model, SoftDeletes};

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
}
