<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        return view('expenses.index');
    }

    public function create()
    {
        //$expense = new Expense
        return view('expenses.edit');
    }
}
