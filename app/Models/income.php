<?php

namespace App\Models;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable; 

class income extends Model
{
    use HasFactory;
    protected $table = 'income';
    use Sortable;

    public $sortable = ['category','amount','income_date'];
}
