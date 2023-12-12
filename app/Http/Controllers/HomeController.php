<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\IssueItem;
use App\Models\ReceiveItem;

class HomeController extends Controller
{
    public function add_stocks(){
        return view('add-stocks');
    }

    public function manage_stocks(){
        $stocks = Stock::all();
        return view('manage-stocks', compact('stocks'));
    }

    public function issue(){
        $issue = Stock::all();
        return view('add-issue-item', compact('issue'));
    }

    public function receive(){
        $receive = Stock::all();
        return view('receive-item', compact('receive'));
    }

   
}
