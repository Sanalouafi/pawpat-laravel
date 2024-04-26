<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Http\Request;

class UserController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets=Pet::all();
        return view('user.index',compact('pets'));
    }
}
