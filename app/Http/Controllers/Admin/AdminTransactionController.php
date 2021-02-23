<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;

class AdminTransactionController extends Controller
{
    public function index()
    {
        return view('tansaction.index')->with('transactions',Transaction::all());
    }
}
