<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $data = $this->user->get();

        return view('user', ['users' => $data]);
    }

    public function register(Request $request)
    {
        $this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->password = $request->password;
        $result = $this->user->save();

        return redirect('/user');
    }
}
