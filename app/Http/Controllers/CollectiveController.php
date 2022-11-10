<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CollectiveController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();

        return view('index', [
            'users' => $users
        ]);
    }


    public function create(Request $request)
    {

        if ($request->isMethod('post')) {
            User::create($request->all());
            return redirect()->route('form.index');
        }

        return view('create', []);
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);

        if ($request->isMethod('put')){
            $user->update($request->all());
            return redirect()->route('form.index');
        }

        return view('edit', [
            'user' => $user
        ]);
    }
}
