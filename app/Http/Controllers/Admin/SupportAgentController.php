<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupportAgentStoreRequest;
use App\Http\Requests\SupportAgentUpdateRequest;
use App\Models\SupportAgent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SupportAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supportAgents = SupportAgent::whereHas('user', function ($query) {
            $query->where('role_id', 2);
        })->get();
        return view('admin.supportAgent.index', compact('supportAgents'));
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
    public function store(SupportAgentStoreRequest $request)
    {

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->role_id = 2;
        $user->save();
        $supportAgent = new SupportAgent();
        $supportAgent->availability = $request->availability;
        $supportAgent->user()->associate($user);
        $supportAgent->save();
        $supportAgent->addMediaFromRequest('profile')->toMediaCollection('supportAgent');

        return redirect()->route('adminSupport.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(SupportAgentUpdateRequest $request, $id)
    {
        $supportAgent = SupportAgent::findOrFail($id);
        $supportAgent->user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        $supportAgent->update([
            'availability' => $request->availability,
        ]);
        if ($request->hasFile('profile')) {
            $supportAgent->clearMediaCollection('supportAgent');
            $supportAgent->addMediaFromRequest('profile')->toMediaCollection('supportAgent');
        }

        return redirect()->route('adminSupport.index')->with('success', 'Support agent updated successfully.');
    }







    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    DB::beginTransaction();

    try {
        $supportAgent = SupportAgent::findOrFail($id);
        $supportAgent->user->delete();
        $supportAgent->delete();

        DB::commit();
        return redirect()->route('adminSupport.index')->with('success', 'Support agent deleted successfully.');
    } catch (\Exception $e) {
        DB::rollback();
        return redirect()->route('adminSupport.index')->with('error', 'Failed to delete support agent.');
    }
}
}
