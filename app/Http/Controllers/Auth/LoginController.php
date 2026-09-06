<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // TODO: once user accounts + database are ready, replace this with real
    // authentication (validate credentials, Auth::attempt, redirect to a
    // role-based dashboard). For now this only renders the front-end form —
    // there is nothing behind it yet.
    public function show(Request $request)
    {
        $role = $request->query('role', 'student');

        if (! in_array($role, ['parent', 'staff', 'student', 'alumni'], true)) {
            $role = 'student';
        }

        return view('auth.login', ['role' => $role]);
    }
}
