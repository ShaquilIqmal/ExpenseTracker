<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\ExpenseService;
use App\Service\UserService;

class HomeController extends Controller
{
    public function index()
    {
        $ss = new ExpenseService; 
        $data['getUserExpenses'] = $ss->getUserExpenses();
        $data['getExpenseCategory'] = $ss->getExpenseCategory();
        $data['getTotalExpensesAmount'] = $ss->getTotalExpensesAmount();
        //dd($data['getTotalExpensesAmount']);
        
        return view('home.homepage',$data); 
    }

    public function createExpenseCategory(Request $r)
    {
        $ss = new ExpenseService;
        $data = $ss -> createExpenseCategory($r);
        return $data;
    }

    public function createExpense(Request $r)
    {
        $ss = new ExpenseService;
        $data = $ss -> createExpense($r);
        return $data;
    }

    public function deleteExpense($id = '')
    {
        $ss = new ExpenseService;
        $result = $ss->deleteExpense($id);

        return response()->json($result);
    }

}
