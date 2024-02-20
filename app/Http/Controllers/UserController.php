<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser()
    {
        $users = User::with('address')->latest()->first();
        return view('welcome', ['users' => $users]);
    }
    public function updateUser(Request $request, $id)
    {
        $users = User::findOrFail($id);

        $address = $users->address()->first();
        $users->address()->update($request->only($address->getFillable()));

        return redirect()->route('welcome')->with('success', 'User has been successfully added.');
    }
}
