<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

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
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string|max:255',
            'contact' => 'required',
            'location' => 'required',
            'fees' => 'required',
            'timing_from' => 'required',
            'timing_to' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
        ]);

        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Handle image upload
        if ($request->hasFile('thumbnail')) {
            // Get the file name with extension
            $fileNameWithExt = $request->file('thumbnail')->getClientOriginalName();
            // Get just the file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just the extension
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            // File name to store
            $fileNameToMove = $fileName . '_' . time() . '.' . $extension;
            // Upload image
            $path = $request->file('thumbnail')->move(public_path('thumbnails'), $fileNameToMove);

            $fileNameToStore = "thumbnails/" . $fileNameToMove;
        } else {
            $fileNameToStore = '../../assets/img/image_placeholder.jpg'; // Default image if no image is uploaded
        }

        // Create gym record
        $gym = new Gym;
        $gym->name = $request->input('name');
        $gym->description = $request->input('description');
        $gym->contact = $request->input('contact');
        $gym->location = $request->input('location');
        $gym->fees = $request->input('fees');
        $gym->timing_from = $request->input('timing_from');
        $gym->timing_to = $request->input('timing_to');
        $gym->thumbnail = $fileNameToStore; // Save the file path to the database
        $gym->save();

        return redirect()->route('gym.index')->with('success', 'Gym created successfully!');
    }

    public function show(Gym $gym)
    {
        return view('gym.show', compact('gym'));
    }

    public function edit(Gym $gym)
    {
        return view('gym.edit', compact('gym'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string|max:255',
            'contact' => 'required',
            'location' => 'required',
            'fees' => 'required',
            'timing_from' => 'required',
            'timing_to' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
        ]);

        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the gym by ID
        $gym = Gym::find($id);

        // Handle image upload
        if ($request->hasFile('thumbnail')) {
            // Delete the old image if it exists
            if ($gym->thumbnail && file_exists(public_path($gym->thumbnail))) {
                unlink(public_path($gym->thumbnail));
            }

            // Get the file name with extension
            $fileNameWithExt = $request->file('thumbnail')->getClientOriginalName();
            // Get just the file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just the extension
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            // File name to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // Move the file to public/thumbnails
            $path = $request->file('thumbnail')->move(public_path('thumbnails'), $fileNameToStore);
            // Save the path in the database
            $gym->thumbnail = 'thumbnails/' . $fileNameToStore;
        }

        // Update gym record
        $gym->name = $request->input('name');
        $gym->description = $request->input('description');
        $gym->contact = $request->input('contact');
        $gym->location = $request->input('location');
        $gym->fees = $request->input('fees');
        $gym->timing_from = $request->input('timing_from');
        $gym->timing_to = $request->input('timing_to');
        $gym->is_featured = $request->input('is_featured', 0); // Default to 0 if not checked
        $gym->save();

        return redirect()->route('gym.index')->with('success', 'Gym updated successfully!');
    }


    public function destroy($id)
    {
        $gym = Gym::find($id);

        if (!$gym) {
            return redirect()->route('gym.index')->with('error', 'Gym not found!');
        }

        $gym->delete();
        return redirect()->route('gym.index')->with('success', 'Gym deleted successfully!');
    }
}
