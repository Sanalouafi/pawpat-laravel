<?php

namespace App\Http\Controllers\SupportAgent;

use App\Http\Controllers\Controller;
use App\Http\Requests\PetStoreRequest;
use App\Models\Pet;
use App\Models\Type;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets=Pet::where('support_agent_id',auth()->id())->get();
        $types=Type::all();
        return view('supportAgent.pet.index',compact('pets','types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PetStoreRequest $request)
{
    $validatedData = $request->validated();

    $validatedData['support_agent_id'] = auth()->id();
    $pet = Pet::create($validatedData);
    if ($request->hasFile('image')) {
        $pet->addMediaFromRequest('image')->toMediaCollection('pet');
    }
    return redirect()->route('supportAgentPet.index')->with('success', 'Pet added successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $pet = Pet::findOrFail($id);
        return view('supportAgent.pet.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pet=Pet::findOrFail($id);
        $pet->delete();
        return redirect()->route('supportAgentPet.index')->with('success', 'Pet deleted successfully.');
    }
}
