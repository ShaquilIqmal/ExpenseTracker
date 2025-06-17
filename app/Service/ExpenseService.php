<?php

namespace App\Service;

use App\Models\User;
use App\Models\Expense;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class ExpenseService
{

    public function getTotalExpensesAmount()
    {
        $data = Expense::where('user_id', Auth::user()->id)
        ->sum('amount');

        return $data;

    }

    public function getUserExpenses()
    {
        $data = Expense::with('category') // Eager load the category
        ->where('user_id', Auth::user()->id)
        ->get();
        return $data;

    }

    public function getExpenseCategory()
    {
        $data = Category::where('user_id', Auth::user()->id)
        ->get();
        return $data;
    }

    public function createExpenseCategory($r)
    {
        $input = $r->validate([
            'expense_category' => 'required|string|max:255',
        ]);
    
        $category = Category::create([
            'user_id'       => Auth::user()->id,
            'category_name' => $input['expense_category'],
            'created_by'    => Auth::user()->id,
        ]);
    
        if ($category) {
            return redirect()->route('homepage')->with('success', 'Category created successfully.');
        }
        return redirect()->back()->with('error', 'Category creation failed.');
    }

    public function createExpense($r)
    {
        $input=$r->input();

        $expense = Expense::create([
            'user_id'        => Auth::user()->id,
            'category_id'    => $input['add_expense_category'],
            'title'          => $input['expense_title'],
            'amount'         => $input['expense_amount'],
        ]);

        if($expense) {
            return redirect()->route('homepage')->with('success', 'Category created successfully.');
        }

        return redirect()->back()->with('error', 'Category creation failed.');

    }

    public function deleteExpense($id)
    {
        $expense = Expense::find($id);
    
        $data = [
            'status' => 'error',
            'type' => 'error',
            'title' => 'Error',
            'msg' => 'An unknown error occurred.'
        ];
        
        if ($expense) {
            $expense->delete();
            $data = [
                'status' => 'success',
                'type' => 'success',
                'title' => 'Deleted!',
                'msg' => 'Data deleted successfully'
            ];
        } else {
            $data['msg'] = 'ID not found';
        }
        
        return $data; // This is what you would return from your service
    }
}