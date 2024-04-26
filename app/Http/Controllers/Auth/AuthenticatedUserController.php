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

        if ($user->role_id === 1) {

            return redirect()->route('admin.index');

        } elseif ($user->role_id === 2 && $user->supportAgent->availability === 1) {

            return redirect()->route('supportAgent.index');
        } elseif ($user->role_id === 3) {

            return redirect('user');
        } else {
            return redirect()->route('user.index');

        }

    }
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
