<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedUserController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        $user = Auth::user();

        if ($user->role->name === 'Admin') {

            return redirect('admin');

        } elseif ($user->role->name === 'Aupport Agent' && $user->supportAgent->availability === 1) {

            return redirect('Support Agent');
        } elseif ($user->role->name === 'User') {

            return redirect('user');
        } else {
            return redirect()->route('login');

        }

    }
}
