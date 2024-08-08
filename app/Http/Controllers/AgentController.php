<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\TimeRegister;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required|max:9',
        ]);

        $agent = new Agent();
        $agent->name = $request->input('name');
        $agent->address = $request->input('address');
        $agent->contact = $request->input('contact');
        $agent->save();
        return redirect('/');
    }

    public function update(int $id, Request $request) {
        $agents = Agent::all();
        $agent = $agents->find($id);

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required|max:10',
        ]);

        $agent->name = $request->input('name');
        $agent->address = $request->input('address');
        $agent->contact = $request->input('contact');
        $agent->update();
        redirect()->back()->with('success');
    }

    public function delete(int $id) {
        $agents = Agent::all()->where('id', '=', $id);
        $agents->find($id)->delete();
        redirect()->back()->with('success');
    }

    public function show(){
        return view('index', [
            'agents' => Agent::all(),
            'timeRegisters' => TimeRegister::all()
        ]);

    }

}
