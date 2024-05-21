<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GymController extends Controller
{
    public function index()
    {
        $gyms = Gym::all();
        return view('gym.index', compact('gyms'));
    }

    public function create()
    {
        return view('gym.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string|max:255',
            'contact' => 'required',
            'location' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Gym::create($request->all());
        return redirect()->route('gyms.index')->with('success', 'Gym created successfully!');
    }

    public function show(Gym $gym)
    {
        return view('gym.show', compact('gym'));
    }

    public function edit(Gym $gym)
    {
        return view('gym.edit', compact('gym'));
    }

    public function update(Request $request, Gym $gym)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string',
            'description' => 'string|max:255',
            'contact' => 'string',
            'location' => 'string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $gym->update($request->all());
        return redirect()->route('gyms.index')->with('success', 'Gym updated successfully!');
    }

    public function destroy($id)
    {
        $gym = Gym::find($id);

        if (!$gym) {
            return redirect()->route('gyms.index')->with('error', 'Gym not found!');
        }

        $gym->delete();
        return redirect()->route('gyms.index')->with('success', 'Gym deleted successfully!');
    }
}
