<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use App\Models\Type;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        $types=Type::all();
        $pets = Pet::where('adoption_status', false)->paginate(6);
        return view('user.pet.index', compact('types','pets'));
    }
    public function show($id)
    {
        $pet = Pet::findOrFail($id);
        return view('user.pet.show', compact('pet'));
    }
}
