<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Log;

class UserController extends Controller
{


    /**
     * gunakan untuk register dan login
     */
    public function index()
    {
        // ambil user saat ini 
        $user = Auth::user()->name;
            
    return view("user.index",compact('user'));
        // return view("user.index");
    }
    /**
     * halaman untuk login
     * @return \Illuminate\Contracts\View\View
     */
    public function indexLogin(){
        return view("user.login");
    }
    public function postLogin(Request $request ){

        $username = $request->input("username");
        $password = $request->input("password");

        $name = User::whereName($username)->first();
        // ambil data d
        if($name && Hash::check($password, $name->password)) {
            // Jika user ditemukan, lakukan sesuatu
            Log::info("User ditemukan", ['username' => $username]);
             // Login berhasil
            Auth::login($name); // Login manual
            //  return response()->json($request->all()); // untuk tes
            return redirect()->route("user")->with("success", "Selamat datang, $username!");
        } else {
            // Jika user tidak ditemukan, lakukan sesuatu

            Log::warning("User tidak ditemukan", ['username' => $username]);
            return redirect()->back()->withErrors(['error' => 'Username atau password salah']);
        }

    }

    /**
     * halaman untuk register
     * @return \Illuminate\Contracts\View\View
     */
    public function indexRegister(){
        return view("user.register");
    }
    public function createRegister(Request $request){

        // Validasi input
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);
        
    $user = User::where('name', $request->input('name'))->first();


        if($user == null ){

          
            // dump("user tidak ada, lanjutkan proses pembuatan user");
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

            return redirect()->route('user.login')->with('success', 'User berhasil dibuat. Silakan login.');
        }else {
            // dump("user sudah ada, tidak bisa membuat user baru");
            return redirect()->back()->with('error', 'Username sudah digunakan. Silakan pilih username lain.');
         }

        // Redirect atau lakukan sesuatu setelah pembuatan user

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
