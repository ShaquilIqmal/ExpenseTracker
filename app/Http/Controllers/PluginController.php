<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\ExpenseService;
use App\Service\TemplateService;


class PluginController extends Controller
{
    //
    public function getPluginTemplate()
    {

        $ss = new ExpenseService;
        $data['getUserExpenses'] = $ss->getUserExpenses();
        $data['getExpenseCategory'] = $ss->getExpenseCategory();
        $data['getTotalExpensesAmount'] = $ss->getTotalExpensesAmount();
        // dd($data['getTotalExpensesAmount']);

        $ss1 = new TemplateService;
        $data['getMessage']  = $ss1 -> getMessage();
        // dd($data);

        return view('templateList.templatePage',$data);
    }

    public function getUserExpenses()
    {
        $ss = new ExpenseService;
        $data = $ss -> getUserExpenses();
        return $data;
    }

    public function getExpenseCategory()
    {
        $ss = new ExpenseService;
        $data = $ss -> getExpenseCategory();
        return $data;
    }

    public function getTotalExpensesAmount()
    {
        $ss = new ExpenseService;
        $data = $ss -> getTotalExpensesAmount();
        return $data;
    }

    public function createMessage(Request $r)
    {
        $ss = new TemplateService;
        $data = $ss -> createMessage($r);
        return $data;
    }





}
