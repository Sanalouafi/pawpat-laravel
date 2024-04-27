<?php

namespace App\Http\Controllers\Home;

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
        return view('pets.index', compact('types','pets'));
    }
    public function show($id)
    {
        $pet = Pet::findOrFail($id);
        return view('pets.show', compact('pet'));
    }

}
