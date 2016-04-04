<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Inventory;

class InventoryController extends Controller
{
    public function __construct(Inventory $inventory)
    {
        $this->inventory = $inventory;
    }

    public function index(Request $request)
    {
        return response()->view('index');
    }

    public function form(Request $request)
    {
        return response()->view('form');
    }

    public function detail(Request $request, $id)
    {
        return response()->view('detail');
    }
     public function create(Request $request)
    {
        $this->inventory->code = $request->code;
        $this->inventory->name = $request->name;
        $this->inventory->qty = $request->qty;
        $this->inventory->save();

        return redirect()->route('inventory.index');
    }
}
