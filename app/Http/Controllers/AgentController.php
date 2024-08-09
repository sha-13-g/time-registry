<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use App\Models\Agent;
use App\Models\TimeRegister;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function create(CreateAgentRequest $request) {

        Agent::create($request->validated());
        return redirect('/');
    }

    public function update(Agent $agent, UpdateAgentRequest $request) {

        $agent->update([
            'name'    => $request->input('name'),
            'address' => $request->input('address'),
            'contact' => $request->input('contact'),
        ]);

        return redirect()->back()->with('success');
    }

    public function delete(Agent $agent) {
        $agent->delete();
        return redirect()->back()->with('success');
    }

    public function show(){
        return view('index', [
            'agents' => Agent::all(),
            'timeRegisters' => TimeRegister::all()
        ]);

    }

}
