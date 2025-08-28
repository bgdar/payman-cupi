<?php

namespace App\Http\Controllers;
use App\Models\Store;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {

        //ambil 12 data dari urutan terbaru untuk di tampilkan
        $All_data_store = Store::orderBy("id",direction: 'desc')->paginate(12); 
        
        return view('store.index',['datas'=>$All_data_store]);
    }
    

    /**
     * post : terima semua data 
     */
    public function create(Request $request) {
        $data = $request->all();
          // Untuk debugging di log, bukan ke response
    
          // contoh kembalikan response
        return response()->json($data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
