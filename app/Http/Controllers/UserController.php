<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser()
    {
        $users = User::with('addresses')->latest()->first();
        return view('welcome', ['users' => $users]);
    }

    public function updateUser(Request $request, $userId)
    {
        $users = User::findOrFail($userId);
        $users->update($request->only($users->getFillable()));
        foreach ($users->addresses as $key => $address) {
            $address->update([
                'address1' => $request->input('address1')[$key],
                'address2' => $request->input('address2')[$key],
                'city' => $request->input('city')[$key],
                'state' => $request->input('state')[$key],
                'zip' => $request->input('zip')[$key],
            ]);
        }
        return redirect()->route('welcome')->with('success', 'User has been successfully added.');
    }
}
