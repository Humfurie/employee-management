<?php

namespace Domain\Employee\Models;

use Domain\Position\Models\Position;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'position_id',
        'first_name',
        'middle_name',
        'last_name',
    ];

    /**
     * The roles that belong to the Employee
     */
    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }
}
