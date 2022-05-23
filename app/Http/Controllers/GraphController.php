<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\MySqlConnection;
use App\Models\expenses as ModelsExpenses;
use App\Models\income as ModelsIncome;
use Illuminate\Pagination\Paginator;

class GraphController extends Controller
{
    public function index(){
        //get user id 
        $user = \Auth::user();
        $postsI = ModelsIncome::sortable()->where('u_id', $user['id'])->paginate();
        $postsE = ModelsExpenses::sortable()->where('u_id',$user['id'])->paginate();
        
        return view('graph',['incomes' => $postsI],['expenses' => $postsE]);
    }
}
