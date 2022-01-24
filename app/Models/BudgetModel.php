<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetModel extends Model
{
    use HasFactory;

    protected $table = 'budgets';

    protected $fillable = [
        'seller',
        'client',
        'description',
        'value'
    ];
}
