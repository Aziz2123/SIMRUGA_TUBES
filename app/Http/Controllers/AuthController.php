<?php

namespace App\Http\Controllers;

// use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index ()
    {
        // kita ambil data user lalu simpan pada variable $user
        $user = Auth::user();

        // kondisi jika user nya ada
        if ($user) {
            // jika user nya memiliki level admin
            if ($user->level_id == '1') {
                return redirect()->intended('bendahara');
            }
            // jika user nya memiliki level manager
            else if ($user->level == '2') {
            return redirect()->intended('manager');
            }
        }
        return view('login');
    }
}