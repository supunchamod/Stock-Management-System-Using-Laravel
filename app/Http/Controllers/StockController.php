<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\IssueItem;
use App\Models\ReceiveItem;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all();
        return view('manage-stocks', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Stock::create($request->all());

        return redirect()->route('stocks.index')->with('success', 'Item added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        $stock->delete();

        return redirect()->route('stocks.index')->with('success', 'Stock deleted successfully!');
    }

    public function receiveItem(Request $request)
    {
        // Validation

        ReceiveItem::create($request->all());

        // Update stock quantity
        $this->updateStockQuantity($request->item_code, $request->quantity);

        return redirect()->route('stocks.index')->with('success', 'Item received successfully.');
    }

    public function issueItem(Request $request)
    {
        // Validation

        IssueItem::create($request->all());

        // Update stock quantity
        $this->updateStockQuantity($request->item_code, -$request->quantity);

        return redirect()->route('stocks.index')->with('success', 'Item issued successfully.');
    }

    public function updateStockQuantity($itemCode, $quantity)
    {
        $stock = Stock::where('item_code', $itemCode)->first();
        
        if ($stock) {
            $stock->quantity += $quantity;
            $stock->save();
        }
    }
}
