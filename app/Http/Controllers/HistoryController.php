<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function showTransaction(){
        $transactions = DB::table('transactions')->get();
        return view('history', compact('transactions'));
    }
}
