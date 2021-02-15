<?php

namespace App\Http\Controllers;

use App\Models\roles;
use App\Models\user_role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
    }

    public function addUser()
    {
        $roles = roles::all();
        return view('admin.index', compact('roles'));
    }

    public function saveUsers(Request $request)
    {
        $simpan = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('12345678')
        ]);
        $simpan->roles()->create([
            'role_id' => $request->role_id
        ]);

        return back();
    }
}
