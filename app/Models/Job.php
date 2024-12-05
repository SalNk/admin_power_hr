<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'description', 'salary', 'user_id', 'is_current',
        'is_open', 'skills', 'available_until', 'location',
        'duration', 'work_type', 'contract_type',
        'id_number', 'category_id',
    ];

    protected $casts = [
        'is_current' => 'boolean',
        'is_open' => 'boolean',
        'available_until' => 'date'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
