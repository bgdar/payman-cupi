<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ambil semua data user yang di kelola oleh admin
        $all_user  = Admin::with("grupe-kode")->get();
        return view("admin.index", compact("all_user"));
    }
    /**
     * Display halaman login untuk admin
     */
    public function adminLogin()
    {
        // jika user yang login maka update role nya
        $user = User::where("role", "user")->first();
        if ($user) {
            $user->role = 'admin';
            $user->save();
        }

        return view("admin.login");
    }
    public function adminPostLoggin(Request $request)
    {
        $name = $request->input("username");
        $password = $request->input("password");
        $grupe_kode = $request->input("grupe-kode");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admins)
    {
        //
    }
}
