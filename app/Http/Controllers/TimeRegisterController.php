<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\TimeRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class TimeRegisterController extends Controller
{
    public function createComming(int $agent_id) {

        $timeRegister = new TimeRegister();
        $timeRegister->comming_time = Date::now();
        $timeRegister->agent_id = $agent_id;
        $timeRegister->save();
        return redirect()->back()->with('success');
    }

    public function createLeaving(int $agent_id) {

        $agent = Agent::all()->find($agent_id);

        $timeRegisters = $agent->timeRegister;

        $id = $timeRegisters->last();

        $timeRegister = TimeRegister::all()->find($id);
        $timeRegister->leaving_time = Date::now();
        $timeRegister->save();
        return redirect()->back()->with('success');
    }

    public function update(int $id, Request $request) {
        $timeRegister = TimeRegister::find($id);

        $request->validate([
            'comming_time' => 'required',
            'leaving_time' => 'required',
        ]);

        $timeregister = new timeregister();
        $timeRegister->comming_time = "";
        $timeregister->leaving_time = "";
        $timeRegister->update();
        return redirect()->back()->with('success');
    }

    public function delete(int $id) {
        $timeRegister = TimeRegister::find($id);
        $timeRegister->delete();
        return redirect()->back()->with('success');
    }
}
