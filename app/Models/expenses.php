<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class expenses extends Model
{
    use HasFactory;
    use Sortable;

    public $sortable = ['category','amount','expense_date'];
}
