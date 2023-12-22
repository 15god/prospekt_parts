<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('index', [
            'products' => Product::query()->limit(50)->orderBy('id', 'DESC')->get(),
            'total' => Product::query()->sum('quantity'),
            'positions' => Product::query()->count(),
            'status' => json_encode(session('status') ?? "")
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'name' => 'required',
//        ]);

        $queryStatus = Product::query()->create($request->all());

        $response = $queryStatus ? 'record added' : 'no record added';

        return redirect('/')->with([
            'status' => json_encode($response)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $queryStatus = Product::query()->where('id', $request->id)->update([
          "name" => $request->name,
          "article" => $request->article,
          "price" => $request->price,
          "unit" => $request->unit,
          "quantity" => $request->quantity,
        ]);

        $response = $queryStatus ? 'record updated' : 'record not affected';

        return redirect('/')->with([
            'status' => json_encode($response)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $queryStatus = Product::query()->where('id', $request->id)->delete();

        $response = $queryStatus ? 'record deleted' : 'smth went wrong';

        return redirect('/')->with([
            'status' => json_encode($response)
        ]);
    }
}
