<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTimeRegisterRequest;
use App\Models\Agent;
use App\Models\TimeRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class TimeRegisterController extends Controller
{
    public function createComming(Agent $agent) {
        TimeRegister::create([
            'comming_time' => Date::now(),
            'agent_id' => $agent->id
        ]);

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

    public function update(int $id, UpdateTimeRegisterRequest $request) {
        $timeRegister = TimeRegister::find($id);

        $timeRegister->update([
            'comming_time' => $request->input('comming-time'),
            'leaving_time' => $request->input('leaving-time'),
        ]);

        return redirect()->back()->with('success');
    }

    public function delete(int $id) {
        $timeRegister = TimeRegister::find($id);
        $timeRegister->delete();
        return redirect()->back()->with('success');
    }
}
