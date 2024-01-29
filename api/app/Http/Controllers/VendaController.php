<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;


class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendas = Venda::with('produtos')->get();
        return response()->json($vendas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'amount' => 'required|numeric',
            'produtos.*.produto_id' => 'required|numeric',
            'produtos.*.name' => 'required|string',
            'produtos.*.price' => 'required|numeric',
            'produtos.*.amount' => 'required|numeric',
        ]);

        $sale = Venda::create([
            'sales_id' => $data['sales_id'],
            'amount' => $data['amount'],
        ]);

        $sale->produtos()->createMany($data['produtos']);

        return response()->json($sale, 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $venda = Venda::with('produtos')->findOrFail($id);
        return response()->json($sale);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
