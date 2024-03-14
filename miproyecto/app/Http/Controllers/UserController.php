<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index', ['users' => $users]);
    }

    public function create()
    {
        $user = new User();

        $user->name = "Antonio";
        $user->email = "tonices17@gmail.com";
        $user->password = Hash::make('1234');
        $user->age = 27;
        $user->address = "C/ Capitán Baltasar Tristany 71";
        $user->zip_code = 03201;

        $user->save();

        User::create([
            "name" => "Sandra",
            "email" => "sandra@gmail.com",
            "password" => Hash::make('1234'),
            "age" => 27,
            "address" => "Calle de Elda 8",
            "zip_code" => 03241,
        ]);

        return redirect('user');
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }
}
