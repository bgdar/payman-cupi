<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * gunakan untuk register dan login
     */
    public function index()
    {
        // ambil user saat ini
        $user = Auth::user()->name;

        return view("user.index", compact('user'));
        // return view("user.index");
    }
    /**
     * halaman untuk login
     * @return \Illuminate\Contracts\View\View
     */
    public function userLogin()
    {
        return view("user.login");
    }
    public function postLogin(Request $request)
    {

        $username = $request->input("username");
        $password = $request->input("password");
        $name = User::whereName($username)->first();
        // ambil data d
        if ($name && Hash::check($password, $name->password)) {

            // Login berhasil
            Auth::login($name); // Login manual
            //  return response()->json($request->all()); // untuk tes
            return redirect()->route("user")->with("success", "Selamat datang, $username!");
        } else {
            // Jika user tidak ditemukan, lakukan sesuatu
            return redirect()->back()->with("error", "Login gagal. Periksa username dan password Anda.");
        }
    }
    /**
     * halaman untuk register
     * @return \Illuminate\Contracts\View\View
     */
    public function indexRegister()
    {
        return view("user.register");
    }
    public function createRegister(Request $request)
    {

        // Validasi input
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);

        $user = User::where('name', $request->input('name'))->first();

        if ($user == null) {

            // dump("user tidak ada, lanjutkan proses pembuatan user");
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

            return redirect()->route('user.login')->with('success', 'User berhasil dibuat. Silakan login.');
        } else {
            // dump("user sudah ada, tidak bisa membuat user baru");
            return redirect()->back()->with('error', 'Username sudah digunakan. Silakan pilih username lain.');
        }
        // Redirect atau lakukan sesuatu setelah pembuatan user
    }

    /**
     * profile page
     */
    public function profile()
    {
        // datapkah data user yang login saat ini 
        $user = Auth::user();

        return view("user.profile", ["user" => $user]);
    }
    public function profileEdit()
    {
        return view("user.profile-edit");
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
