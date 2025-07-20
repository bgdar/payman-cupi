<?php

namespace App\Http\Controllers;

use App\Models\TableRervation;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class TableRervationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $table = TableRervation::all();
        return view("table-reservations.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request )
    {
        // Validasi data yang diterima dari form(all data)
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required|date_format:H:i', // Format waktu harus sesuai dengan H:i
            'guest_count' => 'required|integer|min:1',
            'notes' => 'nullable|string|max:500',
        ]);
        log::info("Data yang diterima: ", $request->all());
            // Simpan data ke database
            TableRervation::create([
                "name"=> $data['name'],
                "email"=> $data['email'],
                "phone"=> $data['phone'],

                "reservation_date"=> $data['reservation_date'],
                "reservation_time"=> now()->format('H:i:s'), // Menggunakan waktu saat ini
                "guest_count"=> $data['guest_count'],
                "notes"=> $data['notes'] ?? null,
                // sesuaikan status sebelum di confirms oleh admin 
                'status' => 'panding',
            ]);
    
            redirect()->route('tableReservations')->with('success', 'Reservation created successfully!');
        
        
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
    public function show(TableRervation $tableRervation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TableRervation $tableRervation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TableRervation $tableRervation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TableRervation $tableRervation)
    {
        //
    }
}
