<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
    ];

  /**
   * Get all of the comments for the EmployeeController
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function positions(): HasMany
  {
      return $this->hasMany(Position::class, 'employee_position');
  }
}
