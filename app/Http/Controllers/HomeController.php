<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\expenses;
use App\income;

use App\Models\expenses as ModelsExpenses;
use App\Models\income as ModelsIncome;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = \Auth::user();
        
        $incomes = ModelsIncome::where()

        return view('home',compact('user'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $type = $data['input_1'];
        if($type == 'income'){
            $input_data = ModelsIncome::insertGetId([
                'u_id' => $data['user_id'],'amount' => $data['amount'], 'income_date' => $data['date']
            ]);
        } elseif($type == 'expense'){
            $input_data = ModelsExpenses::insertGetId([
                'u_id' => $data['user_id'],'amount' => $data['amount'], 'expense_date' => $data['date']
            ]);
        }
        return redirect()->route('home');
    }
}
