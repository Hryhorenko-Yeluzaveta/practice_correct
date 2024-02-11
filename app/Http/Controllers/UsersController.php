<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function showUSer()
    {
        $users = Users::with('address')->get();
        return view('welcome', ['users' => $users]);
    }
    public function updateUser(Request $request, $id)
    {
        $users = Users::findOrFail($id);
        $users->update($request->all());
        $users->address()->update($request->only('address1','address2','city','state', 'zip'));
        return redirect()->route('welcome')->with('success', 'User has been successfully added.');
    }
}
