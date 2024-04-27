<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AdoptionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdoptionRequetController extends Controller
{
    public function store(Request $request)
    {

        $adoptionRequest = AdoptionRequest::create([
            'pet_id' => $request->pet_id,
            'user_id' => Auth::user()->id,
            'support_agents_id' => $request->support_agents_id,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Adoption request submitted successfully!');
    }

}
